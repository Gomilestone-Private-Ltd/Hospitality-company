<?php

namespace App\Http\Controllers\Web;

use CreateAppLog;
use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\Material;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Supersubcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebProductController extends Controller
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
    
    #Bind Model Subcategory
    protected $subcategory;

    #Bind Model Supersubcategory
    protected $supersubcategory;
    
    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(Product $product,Category $category,Material $material, Color $color,Size $size, Subcategory $subcategory, Supersubcategory $supersubcategory)
    {
        $this->size               = $size;
        $this->color              = $color;
        $this->product            = $product;
        $this->material           = $material;
        $this->category           = $category;
        $this->subcategory        = $subcategory;
        $this->supersubcategory   = $supersubcategory;
    }

    public function index(){
        
    }
}
