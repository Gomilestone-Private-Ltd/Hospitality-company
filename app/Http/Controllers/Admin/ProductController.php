<?php

namespace App\Http\Controllers\Admin;

use DataTables;
use App\Helper\Slug;
use App\Models\Color;
use App\Models\Size;
use App\Helper\Masked;
use App\Helper\Picture;
use App\Models\Product;
use App\Models\Material;
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
    
    #Bind Model Color
    protected $color;
    
    #Bind Model Size
    protected $size;

    #Bind Model Product
    protected $product;
    
    #Bind Model Material
    protected $material;

    #Bind Model Category
    protected $category;

    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(Product $product,Category $category,Material $material, Color $color,Size $size)
    {
        $this->size          = $size;
        $this->color         = $color;
        $this->product       = $product;
        $this->material      = $material;
        $this->category      = $category;
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
            $getColors = $this->color->where('status',1)->get();
            $getSize = $this->size->where('status',1)->get();
            $categories = $this->category->where('status',1)->get();
            $materials = $this->material->where('status',1)->get();
            return view($this->view.'.create')->with([
                                                      'categories'   => $categories,
                                                      'getColors'    => $getColors,
                                                      'getSizes'     => $getSize,
                                                      'materials'    => $materials
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
                dd($request->all(),1);
                $varientData = [
                                    'varient_type' => $request->varientType,
                                    'varient_value' => $request->varientValue
                               ];

                $varientDetail = [];
                foreach($request->varient_name as $key=>$varient){
                    $varientDetail[] =[
                                        'varient_id'        => $request->varientValue[$key] ??"",
                                        'varient_lable'     => $request->varient_name[$key] ??"",
                                        'varient_value'     => getVarientLabelValue($request->varientValue[$key]) ??"",       
                                        'varient_price'     => $request->varient_price[$key] ??"",
                                        'varient_type_id'   => $request->varientType,
                                        'varient_type'      => getVarientType($request->varientType) ??'',
                                    ];
                }
                $varientData['varient_detail'] = $varientDetail;

                $productDetail = [
                                'slug'              => Slug::smallSlug() ??'',
                                'category_id'       => $request->category ??"",
                                'subcategory_id'    => $request->subcategory ??"",
                                'supsubcategory_id' => $request->supersubcategory ??"",
                                'name'              => $request->name ??"",
                                'title'             => $request->a_p ??"",
                                'varient_detail'    => json_encode($varientData) ??"",
                                'added_by'          => Masked::getUserId() ??'',
                            ];
                Product::create($productDetail);
            
            
            
            return redirect()->back()->with(['success'=>"Product Added Successfully !!"]);
        }catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        } 
    }

}
