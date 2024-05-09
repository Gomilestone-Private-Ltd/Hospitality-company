<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Helper\Slug;
use App\Helper\Masked;
use App\Helper\Picture;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Supersubcategory;
use App\Helper\CreateAppLog;
use App\Http\Controllers\Controller;
use App\Http\Requests\Subcategory\EditRequest;
use App\Http\Requests\Subcategory\CreateRequest;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    #Bind the view
    protected $view = "admin.subcategory";
    
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
        $this->category    = $category;
        $this->subcategory = $subcategory;
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
    public function getSubCategoryDatatable()
    {
        try{
            $subcategory  = $this->subcategory->with(['addedBy','getCategory'])->select('*');
            return Datatables::of($subcategory)->addIndexColumn()
                                            ->addColumn('action', function($row){})
                                            ->rawColumns(['action'])
                                            ->make(true);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View subcategory requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
    }
    
    /**
     * @method Create Sub category 
     * @param 
     * @return create page
     */
    public function create()
    {
        $categories = $this->category->where('status',1)->get();
        return view($this->view.'.create')->with([
                                                   'categories' => $categories
                                                 ]);
    }

    /**
     * @method Create sub category
     * @param category details
     * @return response
     */
    public function store(CreateRequest $request)
    {
       
        try{
            $subcategoryDetail = [
                                    'slug'        => Slug::smallSlug() ??'',
                                    'name'        => $request->name ??'',
                                    'category_id' => $request->category ??'',
                                    'meta_url'    => $request->name ??'',
                                    'description' => $request->description ??'',
                                    //'image'       => ($request->hasFile('image')) ? Picture::uploadToS3('/subcategory',$request->image) : "" ??'',
                                    'added_by'    => Masked::getUserId() ??'',
                              ];
            $getSubCategoryDetail = $this->subcategory->create($subcategoryDetail);

            $updatesubcategoryDetail = [
                                        'image' => ($request->hasFile('image')) ? Picture::uploadToS3('/subcategory/'.$getSubCategoryDetail->id,$request->image) : "" ??'',
                                       ];
            $getSubCategoryDetail->update($updatesubcategoryDetail);

            CreateAppLog::getInfoLog(Masked::getUserName()." created sub category ".$request->name);

            return redirect()->back()->with([
                                                'success' =>"Created successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Created sub category requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
        
    }

    /**
     * @method Edit sub category 
     * @param  
     * @return Edit page
     */
    public function edit($slug)
    {
        try{
            $getSubCategoryDetail = $this->subcategory->whereSlug($slug)->first();
            $categories = $this->category->where('status',1)->get();
            return view($this->view.'.edit')->with([
                                                    'getSubCategoryDetail' => $getSubCategoryDetail,
                                                    'categories'           => $categories
                                                   ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Edit sub category requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error'  => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Update sub category 
     * @param 
     * @return update response
     */
    public function update(EditRequest $request,$slug)
    {
        try{
            $getSubCategoryDetail = $this->subcategory->select('image')->whereSlug($request->slug)->first();
            $categoryDetail = [
                                'name'        => $request->name ??'',
                                'category_id' => $request->category ??'',
                                'description' => $request->description ??'',
                                'image'       => ($request->hasFile('image')) ? Picture::uploadToS3('/subcategory/'.$getSubCategoryDetail->id,$request->image) : $getSubCategoryDetail->image ??'',
                                'meta_url'    => str_replace(' ', '-', strtolower($request->name)) ??'',
                                'updated_by'  => Masked::getUserId() ??'',
                              ];
            $this->subcategory->whereSlug($slug)->update($categoryDetail);
            CreateAppLog::getInfoLog(Masked::getUserName()." updated the sub category ");
            return redirect()->back()->with([
                                                'success' =>"Updated successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("updated sub category requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Delete sub category 
     * @param 
     * @return delete response
     */
    public function delete(Request $request)
    {
        try{
            $getSubCategory = $this->subcategory->whereSlug($request->slug)->first();
            

            $getsuperSubCategory = $this->supersubcategory->where('subcategory_id',$getSubCategory->id)->get();
            if(count($getsuperSubCategory)){
                return response()->json([
                                            'status'   => 300,
                                            'error'  => "System using this sub-Category !!"
                                        ]);
            }else{
                $getSubCategory->delete();
                CreateAppLog::getErrorLog("sub category Deleted successfully by ".Masked::getUserName());
                return response()->json([
                                        'status'   => 200,
                                        'success'  => "Deleted Successfully !!"
                                        ]);
            }

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Delete sub category requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }

    /**
     * @method Change sub category status
     * @param 
     * @return Change status response
     */
    public function status(Request $request)
    {
        try{
            $getSubcategoryDetail = $this->subcategory->whereSlug($request->slug)->first();
            
            $key = "";
            if($getSubcategoryDetail->status == 1){
                $data = [
                            'status'     => 0 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->subcategory->whereSlug($request->slug)->update($data);
                $key = "Disable";
            }else{
                $data = [
                            'status'     => 1 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->subcategory->whereSlug($request->slug)->update($data);
                $key = "Enable";
            }

            CreateAppLog::getErrorLog("Sub Category status changed by ".Masked::getUserName());
            return response()->json([
                                     'status'     => 200,
                                     'statusName' => $key,
                                     'success'    => "Staus changed successfully !!"
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Change subcategory status requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }

    /**
     * @method Get sub category list
     * @param category id
     * @return sub category list
     */
    public function getSubCategory(Request $request)
    { 
        try{
            $subCategoryList = $this->subcategory->select('id','slug','name')->where([
                                                                                      'category_id' => $request->getCategoryId,
                                                                                      'status'      => 1
                                                                                     ])->get();
            CreateAppLog::getErrorLog("Get sub category list requested by ".Masked::getUserName());
            return response()->json([
                                     'status'   => 200,
                                     'data'     => $subCategoryList
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Get sub category list requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }
}
