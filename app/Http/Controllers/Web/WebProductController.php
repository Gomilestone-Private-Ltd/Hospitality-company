<?php

namespace App\Http\Controllers\Web;

use CreateAppLog;
use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\Material;
use App\Models\Category;
use App\Models\IdealFor;
use App\Models\AreaOfUse;
use App\Models\Subcategory;
use App\Models\Supersubcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebProductController extends Controller
{
    #Bind the view
    protected $view = "web.product";
    
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
    
    #Bind Model Subcategory
    protected $subcategory;

    #Bind Model Supersubcategory
    protected $supersubcategory;

    #Bind Model AreaOfUse
    protected $areaOfUse;

   #Bind Model IdealFor
   protected $idealFor;
    
    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(Product $product,Category $category,Material $material, Color $color,Size $size, Subcategory $subcategory, Supersubcategory $supersubcategory,AreaOfUse $areaOfUse, IdealFor $idealFor)
    {
        $this->size               = $size;
        $this->color              = $color;
        $this->product            = $product;
        $this->material           = $material;
        $this->idealFor           = $idealFor;
        $this->category           = $category;
        $this->areaOfUse          = $areaOfUse;
        $this->subcategory        = $subcategory;
        $this->supersubcategory   = $supersubcategory;
    }
    
    /**
     * @method
     * @param
     * @return
     */
    public function index()
    {

    }

    /**
     * @method
     * @param
     * @return
     */
    public function subcategoryProducts($name,$slug){
        try{

            $getSubcategory =$this->subcategory->where(['slug'=>$slug,'status'=>1])->first();
            if(!empty($getSubcategory)){
                $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id,'status'=>1])->get();
                $sizes =$this->size->where(['status'=>1])->get();
                $colors =$this->color->where(['status'=>1])->get();
                $materials =$this->material->where(['status'=>1])->get();
                $areaOfUse =$this->areaOfUse->where(['status'=>1])->get();
                $idealFor =$this->idealFor->where(['status'=>1])->get();

                

                return view($this->view.'.subcategory_p')->with([
                                                                    'sizes'          => $sizes,
                                                                    'colors'         => $colors,
                                                                    'idealFor'       => $idealFor,
                                                                    'areaOfUse'      => $areaOfUse,
                                                                    'materials'      => $materials,
                                                                    'getProducts'    => $getProducts,
                                                                    'getSubcategory' => $getSubcategory
                                                                ]);
            }else{
                return redirect()->back();
            }
        }catch(\Exception $e){
            return view('errors.500');
        }
    }

    /**
     * @method
     * @param
     * @return
     */
    public function supsubCategoryProducts($name,$slug){
        try{
            $getsupSubcategory =$this->supersubcategory->where(['slug'=>$slug,'status'=>1])->first();
            if(!empty($getsupSubcategory)){
                $getProducts = $this->product->where(['sup_subCategory_id'=>$getsupSubcategory->id,'status'=>1])->get();
                return view($this->view.'.sup_subcategory_p')->with([
                                                                    'getProducts'       => $getProducts,
                                                                    'getsupSubcategory' => $getsupSubcategory
                                                                ]);
            }else{
                return redirect()->back();
            }
            
        }catch(\Exception $e){
            return view('errors.500');
        }
    }

    /**
     * @method
     * @param
     * @return
     */
    public function productDetails($name,$slug){
        return view($this->view.'.product_detail');
    }
}
