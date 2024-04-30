<?php

namespace App\Http\Controllers\Admin;

use App\Models\ContactUs;
use App\Helper\CreateAppLog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use Masked;
use Carbon;


class ContactUsController extends Controller
{
    #Bind view
    protected $view = "admin.contact_us";


    #Bind Model ContactUs
    protected $contactUs;

    /**
     * @method Define default constructor for controllers
     * @param
     * @return
     */
    public function __construct(ContactUs $contactUs)
    {
        $this->contactUs   = $contactUs;
    }

    /**
     * @method
     * @param
     * @return
     */
    public function index(Request $request)
    {
        if($request->ajax()){ 
            $contactUs = $this->contactUs->select('*');
            return DataTables::of($contactUs)->editColumn('created_at',function($row){
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
            $contactUs = $this->contactUs->whereSlug($slug)->first();
            return view($this->view.'.view')->with(['contactUs'=>$contactUs]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View contact us requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
        
    }

    /**
     * @method Delete contact us
     * @param 
     * @return delete response
     */
    public function delete(Request $request)
    {
        try{
            $contactUs = $this->contactUs->whereSlug($request->slug)->first();
            $contactUs->delete();
            CreateAppLog::getErrorLog("contact us Deleted successfully by ".Masked::getUserName());
            return response()->json([
                                    'status'   => 200,
                                    'success'  => "Deleted Successfully !!"
                                    ]);
            

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Delete contact us requested by ".Masked::getUserName());
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
