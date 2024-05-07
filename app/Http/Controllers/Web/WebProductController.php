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
use DB;
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
    public function subcategoryProducts($name,$slug, $sort= null){
        try{
            
            $getSubcategory =$this->subcategory->where(['slug'=>$slug,'status'=>1])->first();
            if(!empty($getSubcategory)){
                if(!empty($sort)){
                    if($sort == 'RECOMMENDED'){
                        $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id,'status'=>1])->paginate(10);
                    }else if($sort == 'ASC'){
                        $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id,'status'=>1])->orderBy('name','asc')->paginate(10);
                    }else if($sort == 'DESC'){
                        $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id,'status'=>1])->orderBy('name','desc')->paginate(10);
                    }elseif ($sort == 'PRICELOWTOHIGH') {
                        $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id,'status'=>1])->orderBy('gen_price','desc')->paginate(10);
                    }elseif ($sort == 'PRICEHIGHTOLOW') {
                        $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id,'status'=>1])->orderBy('gen_price','asc')->paginate(10);
                    }elseif ($sort == 'NEWIN') {
                        $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id,'status'=>1])->orderBy('id','desc')->paginate(10);
                    }else{
                        $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id,'status'=>1])->paginate(10);
                    }
                   
                }else{ 
                    $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id,'status'=>1])->paginate(10);
                }

                $sizes     = $this->size->where(['status'=>1])->get();
                $colors    = $this->color->where(['status'=>1])->get();
                $materials = $this->material->where(['status'=>1])->get();
                $areaOfUse = $this->areaOfUse->where(['status'=>1])->get();
                $idealFor  = $this->idealFor->where(['status'=>1])->get();

                

                return view($this->view.'.subcategory_p')->with([
                                                                    'sizes'          => $sizes,
                                                                    'colors'         => $colors,
                                                                    'idealFor'       => $idealFor,
                                                                    'areaOfUse'      => $areaOfUse,
                                                                    'materials'      => $materials,
                                                                    'getProducts'    => $getProducts,
                                                                    'getSubcategory' => $getSubcategory,
                                                                    'sort' => $sort ??'',
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
     * @method Get Product details
     * @param slug and catergory/ sub category
     * @return product detail page
     */
    public function productDetails($name,$slug){
        try{
            $getProducts = $this->product->where(['slug'=>$slug,'status'=>1])->first();
            if(!empty($getProducts)){
                $getRelatedproducts =$this->product->where(['sup_subCategory_id'=>$getProducts->sup_subCategory_id,'status'=>1])->get();
                return view($this->view.'.product_detail')->with([
                                                                   'getProducts' => $getProducts,
                                                                   'getRelatedproducts' =>$getRelatedproducts
                                                                 ]);
            }else{
                return view('errors.500');
            }
            
        }catch(\Exception $e){
            return view('errors.500');
        }
        
    }

    /**
     * @method Filter product 
     * @param
     * @return
     */
    public function filterProduct(Request $request)
    {
        try{
            $getProducts = $this->product->where(['status'=>1]);
            
            // if(isset($sort)){
            //     if($sort == 'RECOMMENDED'){
            //         $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id]);
            //     }else if($sort == 'ASC'){
            //         $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id])->orderBy('name','asc');
            //     }else if($sort == 'DESC'){
            //         $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id])->orderBy('name','desc');
            //     }elseif ($sort == 'PRICELOWTOHIGH') {
            //         $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id])->orderBy('gen_price','desc');
            //     }elseif ($sort == 'PRICEHIGHTOLOW') {
            //         $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id])->orderBy('gen_price','asc');
            //     }elseif ($sort == 'NEWIN') {
            //         $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id])->orderBy('id','desc');
            //     }else{
            //         $getProducts = $this->product->where(['subCategory_id'=>$getSubcategory->id]);
            //     }
            // }

            if(isset($request->color)){
                $ids = $request->color;
                // Search for rows where the color column contains any of the specified IDs
                $getProducts = $getProducts->where(function ($query) use ($ids) {
                    foreach ($ids as $id) {
                        $query->orWhereJsonContains('color_id',$id);
                    }
                });
            }

            if(isset($request->size)){
                $sizeIds = $request->size;
                // Search for rows where the size column contains any of the specified IDs
                $getProducts = $getProducts->where(function ($query) use ($sizeIds) {
                    foreach ($sizeIds as $id) {
                        $query->orWhereJsonContains('size_id',$id);
                    }
                });
            }

            if(isset($request->material)){
                $materialId = $request->material;
                // Search for rows where the material column contains any of the specified IDs
                $getProducts = $getProducts->where(function ($query) use ($materialId) {
                    foreach ($materialId as $id) {
                        $query->orWhereJsonContains('material_id',$id);
                    }
                });
            }

            if(isset($request->ideal)){

            }

            if(isset($request->area)){

            }
            
            $view = view($this->view.'.partial.subcategory_p')->with([
                                                                      'getProducts'    => $getProducts->paginate(10)
                                                                     ])->render();
            return ['data'=>$view,'status'=>200,'success' => "Filtered data"];
       }catch(\Exception $e){
             CreateAppLog::getErrorLog("View area of use requested by ".$e->getMessage());
            //return view('errors.500');
            return response()->json(['error'=>$e->getMessage()]);
       }
    }
}
