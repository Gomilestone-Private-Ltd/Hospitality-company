<?php

namespace App\Http\Controllers\Admin;

use Slug;
use Masked;
use Picture;
use DataTables;
use CreateAppLog;
use App\Models\Category;
use App\Models\Subcategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\Category\CreateRequest;
use App\Http\Requests\Category\EditRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    #Bind the view
    protected $view = "admin.category";
    
    #Bind Model Category
    protected $category;

    #Bind Model Subcategory
    protected $subcategory;
    
    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(Category $category,Subcategory $subcategory)
    {
        $this->category = $category;
        $this->subcategory = $subcategory;
    }

    /**
     * @method
     * @param
     * @return
     */
    public function index()
    {
        // $categories = $this->category->get();
        return view($this->view.'.index');
    }

    /**
     * @method
     * @param
     * @return
     */
    public function getCategoryDatatable()
    {
        try{
            $category  = $this->category->with(['addedBy'])->select('*');
            return Datatables::of($category)->addIndexColumn()
                                            ->addColumn('action', function($row){
                                            })->rawColumns(['action'])->make(true);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View category requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
    }

    
    /**
     * @method Create category 
     * @param 
     * @return create page
     */
    public function create()
    {
        return view($this->view.'.create');
    }

    /**
     * @method Create category
     * @param category details
     * @return response
     */
    public function store(CreateRequest $request)
    {
        try{
            $picture = Picture::uploadPicture('assets/category/',$request->image);
           
                $categoryDetail = [
                                    'slug'      => Slug::smallSlug() ??'',
                                    'name'      => $request->name ??'',
                                    'type'      => ($request->category_type == "material") ? 1 : (($request->category_type == "collection") ? 2 : (($request->category_type == "use") ? 3 : 4)) ,
                                    'image'     => ($request->hasFile('image')) ? $picture : "" ??'',
                                    'meta_url'  => $request->name ??'',
                                    'added_by'  => Masked::getUserId() ??'',
                                  ];
                                  $this->category->create($categoryDetail);
                                  dd($categoryDetail);
           
            CreateAppLog::getInfoLog(Masked::getUserName()." created category ".$request->name);
            return redirect()->back()->with([
                                                'success' =>"Created successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("created category requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
        
    }

    /**
     * @method Edit category 
     * @param  
     * @return Edit page
     */
    public function edit($slug)
    {
        try{
            $getCategoryDetail = $this->category->whereSlug($slug)->first();
            return view($this->view.'.edit')->with([
                                                    'getCategoryDetail' => $getCategoryDetail
                                                   ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Edit category requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error'  => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Update category 
     * @param 
     * @return update response
     */
    public function update(EditRequest $request,$slug)
    {
        try{
            $getCategoryDetail = $this->category->select('image')->whereSlug($request->slug)->first();
            $categoryDetail = [
                                'name'        => $request->name ??'',
                                'type'        => ($request->category_type == "material") ? 1 : (($request->category_type == "collection") ? 2 : (($request->category_type == "use") ? 3 : 4)) ,
                                'image'       => ($request->hasFile('image')) ? Picture::uploadPicture('assets/category/',$request->image) : $getCategoryDetail->image ??'',
                                'meta_url'    => $request->name ??'',
                                'updated_by'  => Masked::getUserId() ??'',
                              ];
            $this->category->whereSlug($slug)->update($categoryDetail);
            CreateAppLog::getInfoLog(Masked::getUserName()." updated the category ");
            return redirect()->back()->with([
                                                'success' =>"Updated successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("updated category requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Delete category 
     * @param 
     * @return delete response
     */
    public function delete(Request $request)
    {
        try{

            $getCategory = $this->category->whereSlug($request->slug)->first();
            $getSubCategory = $this->subcategory->where('category_id',$getCategory->id)->get();
            if(count($getSubCategory)){
                return response()->json([
                                            'status'   => 300,
                                            'error'  => "System using this Category !!"
                                        ]);
            }else{
                $getCategory->delete();
                CreateAppLog::getErrorLog("category Deleted successfully by ".Masked::getUserName());
                return response()->json([
                                        'status'   => 200,
                                        'success'  => "Deleted Successfully !!"
                                        ]);
            }
            

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Delete category requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }

    /**
     * @method Change category status
     * @param 
     * @return Change status response
     */
    public function status(Request $request)
    {
        try{
            $getCategoryDetail = $this->category->whereSlug($request->slug)->first();
            $key = "";
            if($getCategoryDetail->status == 1){
                $data = [
                            'status'     => 0 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->category->whereSlug($request->slug)->update($data);
                $key = "Disable";
            }else{
                $data = [
                            'status'     => 1 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->category->whereSlug($request->slug)->update($data);
                $key = "Enable";
            }

            CreateAppLog::getErrorLog("Category status changed by ".Masked::getUserName());
            return response()->json([
                                     'status'     => 200,
                                     'statusName' => $key,
                                     'success'    => "Staus changed successfully !!"
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Change category status requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }

}
