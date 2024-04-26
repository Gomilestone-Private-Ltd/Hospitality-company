<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Helper\Slug;
use App\Helper\Masked;
use App\Helper\Picture;
use App\Models\Product;
use App\Models\Category;
use App\Models\VarientType;
use App\Models\VarientValue;
use App\Helper\CreateAppLog;
use App\Http\Controllers\Controller;
use App\Http\Requests\Product\EditRequest;
use App\Http\Requests\Product\CreateRequest;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    #Bind the view
    protected $view = "admin.product";
    
    #Bind Model Product
    protected $product;
    
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
    public function __construct(Product $product,Category $category, VarientType $varientType, VarientValue $varientValue)
    {
        $this->product       = $product;
        $this->category      = $category;
        $this->varientType   = $varientType;
        $this->varientValue  = $varientValue;
    }

    /**
     * @method
     * @param
     * @return
     */
    public function index()
    {
        try{

            return view($this->view.'.index');
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View product requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
        
    }
    
    /**
     * @method
     * @param
     * @return
     */
    public function getProductDatatable()
    {
        try{
            $product  = $this->product->with(['addedBy'])->select('*');
            return Datatables::of($product)->addIndexColumn()
                                            ->addColumn('action', function($row){
                                            })->rawColumns(['action'])->make(true);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("View product requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method
     * @param
     * @return
     */
    public function create()
    {
        try{
            $getVarientType = $this->varientType->where('status',1)->get();
            $categories = $this->category->where('status',1)->get();
            return view($this->view.'.create')->with([
                                                    'categories'     => $categories,
                                                    'getVarientType' => $getVarientType
                                                    ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Create product requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                                'error' => $e->getMessage()
                                            ]);
        }
    }

    /**
     * @method
     * @param
     * @return
     */
    public function store(CreateRequest $request)
    {
        try{
            $varientDetail = [];
            foreach($request->varient_name as $key=>$varient){
                $varientDetail[] =[
                                'varient_type'      => $request->varient_name[$key] ??"",
                                'varient_value'     => $request->varient_price[$key] ??"",
                ];
            }
            array_push($varientDetail,$request->varientType);
            array_push($varientDetail,$request->varientValue);
           


            $data = [
                     'slug'              => Slug::smallSlug() ??'',
                     'category_id'       => $request->category ??"",
                     'subcategory_id'    => $request->subcategory ??"",
                     'supsubcategory_id' => $request->supersubcategory ??"",
                     'name'              => $request->name ??"",
                     'title'             => $request->a_p ??"",
                     //'image'             => $request->file ??"",
                     'varient_type'      => $request->varientType ??"",
                     'varient_value'     => json_encode($request->varientValue) ??"",
                     'varient_detail'    => json_encode($varientDetail) ??"",
                     'added_by'          => Masked::getUserId() ??'',
                    ];
            Product::create($data);
             dd($data);
            return redirect()->back()->with(['success'=>"Product Added Successfully !!"]);
        }catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        } 
    }

}
