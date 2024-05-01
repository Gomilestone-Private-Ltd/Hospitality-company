<?php

namespace App\Http\Controllers\Admin;

use Slug;
use Masked;
use DataTables;
use CreateAppLog;
use App\Models\Color;
use App\Http\Requests\Color\EditRequest;
use App\Http\Requests\Color\CreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    #Bind the view
    protected $view = "admin.masters.color";
    
    #Bind Model Color
    protected $color;

    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(Color $color)
    {
        $this->color = $color;
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
                $color  = $this->color->with(['addedBy'])->select('*');
                return Datatables::of($color)->addIndexColumn()
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
     * @method Create color
     * @param 
     * @return create page
     */
    public function create()
    {
        return view($this->view.'.create');
    }

    /**
     * @method Create color
     * @param color details
     * @return response
     */
    public function store(CreateRequest $request)
    {
        try{
                $colorDetail = [
                                    'slug'            => Slug::smallSlug() ??'',
                                    'color_name'      => $request->color_name ??'',
                                    'color_code'      => $request->color_code ??'',
                                    'added_by'        => Masked::getUserId() ??'',
                                  ];
                $this->color->create($colorDetail);
           
            CreateAppLog::getInfoLog(Masked::getUserName()." created color ".$request->name);
            return redirect()->back()->with([
                                                'success' =>"Created successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Created color requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
        
    }

    /**
     * @method Edit color
     * @param  
     * @return Edit page
     */
    public function edit($slug)
    {
        try{
            $colorDetail = $this->color->whereSlug($slug)->first();
            return view($this->view.'.edit')->with([
                                                    'colorDetail' => $colorDetail
                                                   ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Edit color requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error'  => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Update color
     * @param 
     * @return update response
     */
    public function update(EditRequest $request,$slug)
    {
        try{
            $colorDetail = [
                                'color_name'      => $request->color_name ??'',
                                'color_code'      => $request->color_code ??'',
                                'updated_by'  => Masked::getUserId() ??'',
                              ];
            $this->color->whereSlug($slug)->update($colorDetail);
            CreateAppLog::getInfoLog(Masked::getUserName()." updated the color ");
            return redirect()->back()->with([
                                                'success' =>"Updated successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("updated color requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Delete color 
     * @param 
     * @return delete response
     */
    public function delete(Request $request)
    {
        try{

            $getcolor = $this->color->whereSlug($request->slug)->first();
            //$getSubCategory = $this->areaOfUse->where('category_id',$getCategory->id)->get();
            if(empty($getcolor)){
                return response()->json([
                                            'status'   => 300,
                                            'error'  => "System using this color !!"
                                        ]);
            }else{
                $getcolor->delete();
                CreateAppLog::getErrorLog("Color Deleted successfully by ".Masked::getUserName());
                return response()->json([
                                        'status'   => 200,
                                        'success'  => "Deleted Successfully !!"
                                        ]);
            }
            

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Delete color requested by ".Masked::getUserName());
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
            $getDetail = $this->color->whereSlug($request->slug)->first();
            $key = "";
            if($getDetail->status == 1){
                $data = [
                            'status'     => 0 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->color->whereSlug($request->slug)->update($data);
                $key = "Disable";
            }else{
                $data = [
                            'status'     => 1 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->color->whereSlug($request->slug)->update($data);
                $key = "Enable";
            }

            CreateAppLog::getErrorLog("Color status changed by ".Masked::getUserName());
            return response()->json([
                                     'status'     => 200,
                                     'statusName' => $key,
                                     'success'    => "Staus changed successfully !!"
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Change color status requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }
}
