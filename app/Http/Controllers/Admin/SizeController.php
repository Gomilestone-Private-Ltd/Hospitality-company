<?php

namespace App\Http\Controllers\Admin;

use Slug;
use Masked;
use DataTables;
use CreateAppLog;
use App\Models\Size;
use App\Http\Requests\Size\EditRequest;
use App\Http\Requests\Size\CreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    #Bind the view
    protected $view = "admin.masters.size";
    
    #Bind Model Size
    protected $size;

    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(Size $size)
    {
        $this->size = $size;
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
                $size  = $this->size->with(['addedBy'])->select('*');
                return Datatables::of($size)->addIndexColumn()
                                                ->addColumn('action', function($row){
                                                })->rawColumns(['action'])->make(true);
            }else{
                return view($this->view.'.index');
            }
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View size requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
    }

    
    /**
     * @method Create size
     * @param 
     * @return create page
     */
    public function create()
    {
        return view($this->view.'.create');
    }

    /**
     * @method Create size
     * @param size details
     * @return response
     */
    public function store(CreateRequest $request)
    {
        try{
                $sizeDetail = [
                                    'slug'          => Slug::smallSlug() ??'',
                                    'size'          => $request->size ??'',
                                    'type'          => $request->size_type ??'',
                                    'added_by'      => Masked::getUserId() ??'',
                                  ];
                $this->size->create($sizeDetail);
           
            CreateAppLog::getInfoLog(Masked::getUserName()." created size ".$request->name);
            return redirect()->back()->with([
                                                'success' =>"Created successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("created size requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
        
    }

    /**
     * @method Edit size
     * @param  
     * @return Edit page
     */
    public function edit($slug)
    {
        try{
            $sizeDetail = $this->size->whereSlug($slug)->first();
            return view($this->view.'.edit')->with([
                                                    'sizeDetail' => $sizeDetail
                                                   ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Edit size requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error'  => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Update size
     * @param 
     * @return update response
     */
    public function update(EditRequest $request,$slug)
    {
        try{
            $sizeDetail = [
                                'size'          => $request->size ??'',
                                'type'          => $request->size_type ??'',
                                'updated_by'    => Masked::getUserId() ??'',
                              ];
            $this->size->whereSlug($slug)->update($sizeDetail);
            CreateAppLog::getInfoLog(Masked::getUserName()." updated the size ");
            return redirect()->back()->with([
                                                'success' =>"Updated successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("updated size requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method Delete size
     * @param 
     * @return delete response
     */
    public function delete(Request $request)
    {
        try{
            $getSize = $this->size->whereSlug($request->slug)->first();
            //$getSubCategory = $this->areaOfUse->where('category_id',$getCategory->id)->get();
            if(empty($getSize)){
                return response()->json([
                                            'status'   => 300,
                                            'error'  => "System using this !!"
                                        ]);
            }else{
                $getSize->delete();
                CreateAppLog::getErrorLog("Size Deleted successfully by ".Masked::getUserName());
                return response()->json([
                                        'status'   => 200,
                                        'success'  => "Deleted Successfully !!"
                                        ]);
            }
            

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Delete size requested by ".Masked::getUserName());
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
            $getDetail = $this->size->whereSlug($request->slug)->first();
            $key = "";
            if($getDetail->status == 1){
                $data = [
                            'status'     => 0 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->size->whereSlug($request->slug)->update($data);
                $key = "Disable";
            }else{
                $data = [
                            'status'     => 1 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->size->whereSlug($request->slug)->update($data);
                $key = "Enable";
            }

            CreateAppLog::getErrorLog("Size status changed by ".Masked::getUserName());
            return response()->json([
                                     'status'     => 200,
                                     'statusName' => $key,
                                     'success'    => "Staus changed successfully !!"
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Change size status requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }
}
