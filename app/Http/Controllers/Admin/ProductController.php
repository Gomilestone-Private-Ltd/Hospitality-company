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
        $categories = $this->category->where('status',1)->get();
        return view($this->view.'.create')->with(['categories'=>$categories]);
    }

}
