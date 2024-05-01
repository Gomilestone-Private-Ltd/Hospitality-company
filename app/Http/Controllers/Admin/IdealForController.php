<?php

namespace App\Http\Controllers\Admin;

use Slug;
use Masked;
use DataTables;
use CreateAppLog;
use App\Models\IdealFor;
use App\Http\Requests\IdealFor\EditRequest;
use App\Http\Requests\IdealFor\CreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IdealForController extends Controller
{
    #Bind the view
    protected $view = "admin.masters.idealFor";
    
    #Bind Model IdealFor
    protected $idealFor;

    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(IdealFor $idealFor)
    {
        $this->idealFor = $idealFor;
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
                $idealFor  = $this->idealFor->with(['addedBy'])->select('*');
                return Datatables::of($idealFor)->addIndexColumn()
                                                ->addColumn('action', function($row){
                                                })->rawColumns(['action'])->make(true);
            }else{
                return view($this->view.'.index');
            }
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View ideal for requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
    }

    
    /**
     * @method Create idealFor
     * @param 
     * @return create page
     */
    public function create()
    {
        return view($this->view.'.create');
    }

    /**
     * @method Create idealFor
     * @param color details
     * @return response
     */
    public function store(CreateRequest $request)
    {
        try{
                $idealForDetail = [
                                    'slug'           => Slug::smallSlug() ??'',
                                    'ideal_for'      => $request->ideal_for ??'',
                                    'added_by'       => Masked::getUserId() ??'',
                                  ];
                $this->idealFor->create($idealForDetail);
           
            CreateAppLog::getInfoLog(Masked::getUserName()." created ideal for ".$request->name);
            return redirect()->back()->with([
                                                'success' =>"Created successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("created ideal for requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
        
    }

    /**
     * @method Edit idealFor
     * @param  
     * @return Edit page
     */
    public function edit($slug)
    {
        try{
            $idealForDetail = $this->idealFor->whereSlug($slug)->first();
            return view($this->view.'.edit')->with([
                                                    'idealForDetail' => $idealForDetail
                                                   ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Edit ideal for requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error'  => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Update idealFor
     * @param 
     * @return update response
     */
    public function update(EditRequest $request,$slug)
    {
        try{
            $idealForDetail = [
                                'ideal_for'   => $request->ideal_for ??'',
                                'updated_by'  => Masked::getUserId() ??'',
                              ];
            $this->idealFor->whereSlug($slug)->update($idealForDetail);
            CreateAppLog::getInfoLog(Masked::getUserName()." updated the ideal for ");
            return redirect()->back()->with([
                                                'success' =>"Updated successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("updated ideal for requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Delete ideal For
     * @param 
     * @return delete response
     */
    public function delete(Request $request)
    {
        try{

            $getIdealFor = $this->idealFor->whereSlug($request->slug)->first();
            //$getSubCategory = $this->areaOfUse->where('category_id',$getCategory->id)->get();
            if(empty($getIdealFor)){
                return response()->json([
                                            'status'   => 300,
                                            'error'  => "System using this !!"
                                        ]);
            }else{
                $getIdealFor->delete();
                CreateAppLog::getErrorLog("Ideal For Deleted successfully by ".Masked::getUserName());
                return response()->json([
                                        'status'   => 200,
                                        'success'  => "Deleted Successfully !!"
                                        ]);
            }
            

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Delete ideal for requested by ".Masked::getUserName());
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
            $getDetail = $this->idealFor->whereSlug($request->slug)->first();
            $key = "";
            if($getDetail->status == 1){
                $data = [
                            'status'     => 0 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->idealFor->whereSlug($request->slug)->update($data);
                $key = "Disable";
            }else{
                $data = [
                            'status'     => 1 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->idealFor->whereSlug($request->slug)->update($data);
                $key = "Enable";
            }

            CreateAppLog::getErrorLog("IdealFor status changed by ".Masked::getUserName());
            return response()->json([
                                     'status'     => 200,
                                     'statusName' => $key,
                                     'success'    => "Staus changed successfully !!"
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Change idealFor status requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }
}
