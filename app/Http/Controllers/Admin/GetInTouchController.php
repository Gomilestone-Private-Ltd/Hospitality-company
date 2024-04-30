<?php

namespace App\Http\Controllers\Admin;

use App\Models\GetInTouch;
use App\Helper\CreateAppLog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use Masked;
use Carbon;

class GetInTouchController extends Controller
{
    #Bind view
    protected $view = "admin.get_in_touch";

    #Bind Model GetInTouch
    protected $getInTouch;

    /**
     * @method Define default constructor for controllers
     * @param
     * @return
     */
    public function __construct(GetInTouch $getInTouch)
    {
        $this->getInTouch  = $getInTouch;
    }
    
    /**
     * @method
     * @param
     * @return
     */
    public function index(Request $request)
    {
        if($request->ajax()){ 
            $getInTouch = $this->getInTouch->select('*');
            return DataTables::of($getInTouch)->editColumn('created_at',function($row){
                        return $row->created_at->format('d/m/Y');
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
            $getInTouch = $this->getInTouch->whereSlug($slug)->first();
            return view($this->view.'.view')->with(['getInTouch'=>$getInTouch]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View Get in touch requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
        
    }

    /**
     * @method Delete Get In Touch 
     * @param 
     * @return delete response
     */
    public function delete(Request $request)
    {
        try{
            $getInTouch = $this->getInTouch->whereSlug($request->slug)->first();
            $getInTouch->delete();
            CreateAppLog::getErrorLog("Get In Touch Deleted successfully by ".Masked::getUserName());
            return response()->json([
                                    'status'   => 200,
                                    'success'  => "Deleted Successfully !!"
                                    ]);
            

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Delete get in touch requested by ".Masked::getUserName());
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
