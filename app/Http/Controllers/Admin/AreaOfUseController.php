<?php

namespace App\Http\Controllers\Admin;

use Slug;
use Masked;
use DataTables;
use CreateAppLog;
use App\Models\AreaOfUse;
use App\Http\Requests\Areaofuse\EditRequest;
use App\Http\Requests\Areaofuse\CreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AreaOfUseController extends Controller
{
    #Bind the view
    protected $view = "admin.masters.areaOfUse";
    
    #Bind Model AreaOfUse
    protected $areaOfUse;

    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(AreaOfUse $areaOfUse)
    {
        $this->areaOfUse = $areaOfUse;
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
                $areaOfUse  = $this->areaOfUse->with(['addedBy'])->select('*');
                return Datatables::of($areaOfUse)->addIndexColumn()
                                                 ->addColumn('action', function($row){
                                                })->rawColumns(['action'])->make(true);
            }else{
                return view($this->view.'.index');
            }
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View area of use requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
    }

    
    /**
     * @method Create area Of Use 
     * @param 
     * @return create page
     */
    public function create()
    {
        return view($this->view.'.create');
    }

    /**
     * @method Create area Of Use
     * @param area Of Use details
     * @return response
     */
    public function store(CreateRequest $request)
    {
        try{
                $areaOfUseDetail = [
                                    'slug'         => Slug::smallSlug() ??'',
                                    'area_of_use'  => $request->area_of_use ??'',
                                    'added_by'     => Masked::getUserId() ??'',
                                  ];
                $this->areaOfUse->create($areaOfUseDetail);
           
            CreateAppLog::getInfoLog(Masked::getUserName()." created area Of Use ".$request->name);
            return redirect()->back()->with([
                                                'success' =>"Created successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("created area Of Use requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
        
    }

    /**
     * @method Edit area Of Use 
     * @param  
     * @return Edit page
     */
    public function edit($slug)
    {
        try{
            $areaOfUseDetail = $this->areaOfUse->whereSlug($slug)->first();
            return view($this->view.'.edit')->with([
                                                    'areaOfUseDetail' => $areaOfUseDetail
                                                   ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Edit area Of use requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error'  => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Update area Of Use  
     * @param 
     * @return update response
     */
    public function update(EditRequest $request,$slug)
    {
        try{
            $areaOfUseDetail = [
                                'area_of_use' => $request->area_of_use ??'',
                                'updated_by'  => Masked::getUserId() ??'',
                               ];
            $this->areaOfUse->whereSlug($slug)->update($areaOfUseDetail);
            CreateAppLog::getInfoLog(Masked::getUserName()." updated the area Of Use ");
            return redirect()->back()->with([
                                                'success' =>"Updated successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("updated area of use requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Delete areaOfUse 
     * @param 
     * @return delete response
     */
    public function delete(Request $request)
    {
        try{

            $getAreaOfUse = $this->areaOfUse->whereSlug($request->slug)->first();
            //$getSubCategory = $this->areaOfUse->where('category_id',$getCategory->id)->get();
            if(empty($getAreaOfUse)){
                return response()->json([
                                            'status'   => 300,
                                            'error'  => "System using this Category !!"
                                        ]);
            }else{
                $getAreaOfUse->delete();
                CreateAppLog::getErrorLog("Area of use Deleted successfully by ".Masked::getUserName());
                return response()->json([
                                        'status'   => 200,
                                        'success'  => "Deleted Successfully !!"
                                        ]);
            }
            

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Delete area of use requested by ".Masked::getUserName());
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
            $getDetail = $this->areaOfUse->whereSlug($request->slug)->first();
            $key = "";
            if($getDetail->status == 1){
                $data = [
                            'status'     => 0 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->areaOfUse->whereSlug($request->slug)->update($data);
                $key = "Disable";
            }else{
                $data = [
                            'status'     => 1 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->areaOfUse->whereSlug($request->slug)->update($data);
                $key = "Enable";
            }

            CreateAppLog::getErrorLog("Area Of use status changed by ".Masked::getUserName());
            return response()->json([
                                     'status'     => 200,
                                     'statusName' => $key,
                                     'success'    => "Staus changed successfully !!"
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Change area of use status requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }
}
