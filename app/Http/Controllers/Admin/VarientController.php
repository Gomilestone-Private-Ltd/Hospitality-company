<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Helper\Slug;
use App\Helper\Masked;
use App\Helper\Picture;
use App\Models\VarientType;
use App\Models\VarientValue;
use App\Helper\CreateAppLog;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Varient\CreateRequest;
use App\Http\Requests\Varient\EditRequest;
use App\Http\Requests\VarientValue\CreateValueRequest;
use App\Http\Requests\VarientValue\EditValueRequest;
use App\Traits\StatusCode;

class VarientController extends Controller
{   use StatusCode;

    #Bind the view
    protected $view = "admin.varient";
    
    #Bind Model Category
    protected $category;

    #Bind Model VarientType
    protected $varientType;

    #Bind Model VarientValue
    protected $varientValue;
    
    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(VarientType $varientType, VarientValue $varientValue)
    {
        $this->varientType = $varientType;
        $this->varientValue = $varientValue;
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
    public function getCategoryDatatable()
    {
        try{
            
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
    public function create(CreateRequest $request)
    {
        try{
            $varientType = [
                            'slug'              => Slug::smallSlug() ??'',
                            'varient_type_name' => $request->varient_type_name??'',
                            'varient_type'      => ($request->varient_type =="color") ? 0 : 1 ??'',
                            'added_by'          => Masked::getUserId() ?? 1,
                            ];
            $this->varientType->create($varientType);
            $getVarientType = $this->varientType->where('status',1)->get();
            return response()->json([
                                        'success'        => "Varient Type Created Successfully !!",
                                        'status'         =>  $this->success,
                                        'getVarientType' =>  $getVarientType
                                    ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Create Varient Type requested by ".Masked::getUserName());
            return response()->json([
                                       'error' => $e->getMessage()
                                    ]);
        }

    }

    /**
     * @method Create varient value 
     * @param 
     * @return create page
     */
    public function addVarientValue(CreateValueRequest $request)
    {
        try{
            $varientValue = [
                            'slug'                  => Slug::smallSlug() ??'',
                            'varient_type_id'       => $request->getVarientTypeId ??'',
                            'varient_label_name'    => $request->label_name ??'',
                            'varient_label_value'   => $request->label_value ??'',
                            'added_by'              => Masked::getUserId() ?? 1,
                            ];
                                         
            $this->varientValue->create($varientValue);
            $getVarientValue = $this->varientValue->where(['status'=>1,'varient_type_id'=>$request->getVarientTypeId])->get();
            return response()->json([
                                        'success'          => "Created Successfully !!",
                                        'status'           =>  $this->success,
                                        'getVarientValues' =>  $getVarientValue
                                    ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Create Varient value requested by ".Masked::getUserName());
            return response()->json([
                                       'error' => $e->getMessage()
                                    ]);
        } 
    }
    
    /**
     * @method Get Varient Value List
     * @param Varient Type Id
     * @return Varient Value List
     */
    public function getVarientValue(Request $request)
    {  
        try{
            $getVarientValue = $this->varientValue->where(['status'=>1,'varient_type_id'=>$request->varientTypeId])->get();
            return response()->json([
                                        'success'          => "Fetched Successfully !!",
                                        'status'           =>  $this->success,
                                        'getVarientValues' =>  $getVarientValue
                                    ]);
        }catch(\Exception $e){
            return response()->json([
                                       'error' => $e->getMessage()
                                    ]);
        } 
    }
}
