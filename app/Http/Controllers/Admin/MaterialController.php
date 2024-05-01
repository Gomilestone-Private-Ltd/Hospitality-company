<?php

namespace App\Http\Controllers\Admin;

use Slug;
use Masked;
use DataTables;
use CreateAppLog;
use App\Models\Material;
use App\Http\Requests\Material\EditRequest;
use App\Http\Requests\Material\CreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    #Bind the view
    protected $view = "admin.masters.material";
    
    #Bind Model Material
    protected $material;

    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(Material $material)
    {
        $this->material = $material;
    }

    /**
     * @method
     * @param
     * @return
     */
    public function index(Request $request)
    {
        try{
            if($request->ajax()){ 
                $material  = $this->material->with(['addedBy'])->select('*');
                return Datatables::of($material)->addIndexColumn()
                                                ->addColumn('action', function($row){
                                                })->rawColumns(['action'])->make(true);
            }else{
                return view($this->view.'.index');
            }
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View material requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
    }

    
    /**
     * @method Create material
     * @param 
     * @return create page
     */
    public function create()
    {
        return view($this->view.'.create');
    }

    /**
     * @method Create idematerialalFor
     * @param material details
     * @return response
     */
    public function store(CreateRequest $request)
    {
        try{
                $materialDetail = [
                                    'slug'      => Slug::smallSlug() ??'',
                                    'name'      => $request->name ??'',
                                    'added_by'  => Masked::getUserId() ??'',
                                  ];
                $this->material->create($materialDetail);
           
            CreateAppLog::getInfoLog(Masked::getUserName()." created material ".$request->name);
            return redirect()->back()->with([
                                                'success' =>"Created successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("created material requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
        
    }

    /**
     * @method Edit material
     * @param  
     * @return Edit page
     */
    public function edit($slug)
    {
        try{
            $materialDetail = $this->material->whereSlug($slug)->first();
            return view($this->view.'.edit')->with([
                                                    'materialDetail' => $materialDetail
                                                   ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Edit material requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error'  => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Update material
     * @param 
     * @return update response
     */
    public function update(EditRequest $request,$slug)
    {
        try{
            $materialDetail = [
                                'name'        => $request->name ??'',
                                'updated_by'  => Masked::getUserId() ??'',
                              ];
            $this->material->whereSlug($slug)->update($materialDetail);
            CreateAppLog::getInfoLog(Masked::getUserName()." updated the material ");
            return redirect()->back()->with([
                                                'success' =>"Updated successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("updated material requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Delete material
     * @param 
     * @return delete response
     */
    public function delete(Request $request)
    {
        try{

            $getMaterial = $this->material->whereSlug($request->slug)->first();
            //$getSubCategory = $this->areaOfUse->where('category_id',$getCategory->id)->get();
            if(empty($getMaterial)){
                return response()->json([
                                            'status'   => 300,
                                            'error'  => "System using this !!"
                                        ]);
            }else{
                $getMaterial->delete();
                CreateAppLog::getErrorLog("Material Deleted successfully by ".Masked::getUserName());
                return response()->json([
                                        'status'   => 200,
                                        'success'  => "Deleted Successfully !!"
                                        ]);
            }
            

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Delete material requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }

    /**
     * @method Change status
     * @param 
     * @return Change status response
     */
    public function status(Request $request)
    {
        try{
            $getDetail = $this->material->whereSlug($request->slug)->first();
            $key = "";
            if($getDetail->status == 1){
                $data = [
                            'status'     => 0 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->material->whereSlug($request->slug)->update($data);
                $key = "Disable";
            }else{
                $data = [
                            'status'     => 1 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->material->whereSlug($request->slug)->update($data);
                $key = "Enable";
            }

            CreateAppLog::getErrorLog("Material status changed by ".Masked::getUserName());
            return response()->json([
                                     'status'     => 200,
                                     'statusName' => $key,
                                     'success'    => "Staus changed successfully !!"
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Change material status requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }
}
