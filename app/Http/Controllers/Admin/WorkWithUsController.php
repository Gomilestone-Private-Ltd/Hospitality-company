<?php

namespace App\Http\Controllers\Admin;

use App\Models\WorkWithUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Helper\CreateAppLog;
use DataTables;
use Masked;
use Carbon;


class WorkWithUsController extends Controller
{
    #Bind view
    protected $view = "admin.work_with_us";

    #Bind Model WorkWithUs
    protected $workWithUs;

    /**
     * @method Define default constructor for controllers
     * @param
     * @return
     */
    public function __construct(WorkWithUs $workWithUs)
    {
        $this->workWithUs  = $workWithUs;
    }
    
    /**
     * @method
     * @param
     * @return
     */
    public function index(Request $request)
    {
        if($request->ajax()){ 
            $workWithUs = $this->workWithUs->select('*');
            return DataTables::of($workWithUs)->editColumn('created_at',function($row){
                        return $row->created_at->format('d/m/Y');
                    })->editColumn('file',function($row){
                        if(!empty($row->file)){
                            return $row->file;
                        }else{
                            return "No File Found";
                        }
                        
                    })->addColumn('action',function($row){
                        
                    })->rawColumns(['action'])
                      ->make(true); 
        }else{ 
            return view($this->view.'.index');
        }
        
    }

    /**
     * @method
     * @param
     * @return
     */
    public function create(){

    }

    /**
     * @method
     * @param
     * @return
     */
    public function store(){

    }

    /**
     * @method
     * @param
     * @return
     */
    public function edit(){

    }

    /**
     * @method
     * @param
     * @return
     */
    public function update(){

    }

    /**
     * @method
     * @param
     * @return
     */
    public function view($slug)
    {
        try{
            $workWithUs = $this->workWithUs->whereSlug($slug)->first();
            return view($this->view.'.view')->with(['workWithUs'=>$workWithUs]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View work with us requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
        
    }

    /**
     * @method Delete sub Work with us 
     * @param 
     * @return delete response
     */
    public function delete(Request $request)
    {
        try{
            $workWithUs = $this->workWithUs->whereSlug($request->slug)->first();
            $workWithUs->delete();
            CreateAppLog::getErrorLog("Work with us Deleted successfully by ".Masked::getUserName());
            return response()->json([
                                    'status'   => 200,
                                    'success'  => "Deleted Successfully !!"
                                    ]);
            

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Delete Work with us requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }

    /**
     * @method
     * @param
     * @return
     */
    public function status(){

    }
}
