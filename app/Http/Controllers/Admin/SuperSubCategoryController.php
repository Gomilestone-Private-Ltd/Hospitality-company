<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Helper\Slug;
use App\Helper\Masked;
use App\Helper\Picture;
use App\Models\Category;
use App\Models\Subcategory;
use App\Helper\CreateAppLog;
use App\Models\Supersubcategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\SuperSubcategory\EditRequest;
use App\Http\Requests\SuperSubcategory\CreateRequest;
use Illuminate\Http\Request;

class SuperSubCategoryController extends Controller
{
    #Bind the view
    protected $view = "admin.supersubcategory";
    
    #Bind Model Category
    protected $category;

    #Bind Model Subcategory
    protected $subcategory;

    #Bind Model Supersubcategory
    protected $supersubcategory;
    
    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(Category $category, Subcategory $subcategory, Supersubcategory $supersubcategory)
    {
        $this->category         = $category;
        $this->subcategory      = $subcategory;
        $this->supersubcategory = $supersubcategory;
    }

    /**
     * @method
     * @param
     * @return
     */
    public function index()
    {
        return view($this->view.'.index');
    }
    
    /**
     * @method
     * @param
     * @return
     */
    public function getSuperSubCategoryDatatable()
    {
        try{
            $superSubCategoryDetail  = $this->supersubcategory->with(['addedBy','getCategory','getSubCategory'])->select('*');
            return Datatables::of($superSubCategoryDetail)->addIndexColumn()
                                                    ->addColumn('action', function($row){})
                                                    ->rawColumns(['action'])
                                                    ->make(true);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View superSubCategoryDetail requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
    }
    
    /**
     * @method Create Super subcategory
     * @param 
     * @return create page
     */
    public function create()
    {
        $categories = $this->category->where('status',1)->get();
        $subcategories = $this->subcategory->where('status',1)->get();
        return view($this->view.'.create')->with([
                                                   'categories'   => $categories,
                                                   'subcategories'=> $subcategories
                                                 ]);
    }

    /**
     * @method Create Super subcategory
     * @param category details
     * @return response
     */
    public function store(CreateRequest $request)
    {
       
        try{
            $superSubcategoryDetail = [
                                        'slug'           => Slug::smallSlug() ??'',
                                        'name'           => $request->name ??'',
                                        'category_id'    => $request->category ??'',
                                        'subcategory_id' => $request->subcategory ??'',
                                        'image'          => ($request->hasFile('image')) ? Picture::uploadPicture('assets/supersubcategory/',$request->image) : "" ??'',
                                        'meta_url'       => $request->name ??'',
                                        'added_by'       => Masked::getUserId() ??'',
                                      ];
            $this->supersubcategory->create($superSubcategoryDetail);
            CreateAppLog::getInfoLog(Masked::getUserName()." created super subcategory ".$request->name);
            return redirect()->back()->with([
                                                'success' =>"Created successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Created super subcategory requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
        
    }

    /**
     * @method Edit super subcategory
     * @param  
     * @return Edit page
     */
    public function edit($slug)
    {
        try{
            $getSuperSubCategoryDetail = $this->supersubcategory->whereSlug($slug)->first();
            $categories = $this->category->where('status',1)->get();
            $subcategories = $this->subcategory->where([
                                                        'category_id' => $getSuperSubCategoryDetail->category_id,
                                                        'status'      => 1,
                                                       ])->get();
            return view($this->view.'.edit')->with([
                                                    'categories'           => $categories,
                                                    'subcategories'        => $subcategories,
                                                    'getSuperSubCategoryDetail' => $getSuperSubCategoryDetail,
                                                   ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Edit super subcategory requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error'  => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Update super subcategory 
     * @param 
     * @return update response
     */
    public function update(EditRequest $request,$slug)
    {
        try{
            $getSuperSubCategoryDetail = $this->supersubcategory->select('image')->whereSlug($request->slug)->first();
            $categoryDetail = [
                                'name'           => $request->name ??'',
                                'category_id'    => $request->category ??'',
                                'subcategory_id' => $request->subcategory ??'',
                                'image'          => ($request->hasFile('image')) ? Picture::uploadPicture('assets/supersubcategory/',$request->image) : $getSuperSubCategoryDetail->image ??'',
                                'meta_url'       => $request->name ??'',
                                'updated_by'     => Masked::getUserId() ??'',
                              ];
            $this->supersubcategory->whereSlug($slug)->update($categoryDetail);
            CreateAppLog::getInfoLog(Masked::getUserName()." updated the super subcategory ");
            return redirect()->back()->with([
                                                'success' =>"Updated successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("updated super subcategory requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Delete super subcategory
     * @param 
     * @return delete response
     */
    public function delete(Request $request)
    {
        try{
            $this->supersubcategory->whereSlug($request->slug)->delete();
            CreateAppLog::getErrorLog("super subcategory Deleted successfully by ".Masked::getUserName());
            return response()->json([
                                     'status'   => 200,
                                     'success'  => "Deleted Successfully !!"
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Delete super subcategory requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }

    /**
     * @method Change super subcategory status
     * @param 
     * @return Change status response
     */
    public function status(Request $request)
    {
        try{
            $getSuperSubcategoryDetail = $this->supersubcategory->whereSlug($request->slug)->first();
            
            $key = "";
            if($getSuperSubcategoryDetail->status == 1){
                $data = [
                            'status'     => 0 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->supersubcategory->whereSlug($request->slug)->update($data);
                $key = "Disable";
            }else{
                $data = [
                            'status'     => 1 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->supersubcategory->whereSlug($request->slug)->update($data);
                $key = "Enable";
            }

            CreateAppLog::getErrorLog("Super subcategory status changed by ".Masked::getUserName());
            return response()->json([
                                     'status'     => 200,
                                     'statusName' => $key,
                                     'success'    => "Staus changed successfully !!"
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Change super subcategory status requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }
    
    /**
     * @method Get Super sub category
     * @param subcategory id
     * @return supersub category list
     */
    public function getSuperSubCategory(Request $request)
    {
        try{
            $supersubcategory = $this->supersubcategory->select('id','slug','name')->where([
                                                                                      'subcategory_id' => $request->getSubCategoryId,
                                                                                      'status'      => 1
                                                                                     ])->get();
            CreateAppLog::getErrorLog("Get super sub category list requested by ".Masked::getUserName());
            return response()->json([
                                     'status'   => 200,
                                     'data'     => $supersubcategory
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Get super sub category list requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
                
        }
    }
}
