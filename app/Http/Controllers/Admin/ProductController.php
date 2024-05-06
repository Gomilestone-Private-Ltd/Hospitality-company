<?php

namespace App\Http\Controllers\Admin;

use Slug;
use Masked;
use Picture;
use DataTables;
use CreateAppLog;
use App\Models\Size;
use App\Models\Color;
use App\Models\Product;
use App\Models\Material;
use App\Models\Category;
use App\Models\VarientType;
use App\Models\VarientValue;
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
    public function index(Request $request)
    {
        try{
            if($request->ajax()){
                $product  = $this->product->with(['addedBy'])->select('*');
                    return Datatables::of($product)->addIndexColumn()
                                                   ->addColumn('image',function($row){
                                                            return $row->gen_image[0];
                                                        })->addColumn('action', function($row){
                                                    })->rawColumns(['action','image'])->make(true);
            }else{
                return view($this->view.'.index');
            }
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
            //Get material details only in array
            $materialDetail = [];
            if($request->material != null ){
                $materialDetail = [];
                foreach($request->material as $key=>$material){
                    $getMaterial = $this->material->where(['id'=>$material,'status'=>1])->first();
                    $materialDetail[] = [
                                          'id'       => $material,
                                          'material' => $getMaterial->name,
                                        ];
                }  
            }
            
            //Get color details only in array
            $colorDetail =[];
            if($request->color != null ){
                foreach($request->color as $key=>$color){
                    $getColor = $this->color->where(['id'=>$color,'status'=>1])->first();
                    $colorDetail[] = [
                                        'id'          => $color,
                                        'color_name'  => $getColor->color_name,
                                        'color_code'  => $getColor->color_code,
                                     ];
                }  
            }
            
            //Get color varient details with image in array
            $colorVarientDetail = [];
            $allImageDetail = [];
            if($request->color != null ){
                foreach($request->color as $key=>$color){
                    $getColor = $this->color->where(['id'=>$color,'status'=>1])->first();
                    
                    //Check color variable exist or not
                    $colorImage = [];
                    if(isset($request->varient_image[$getColor->color_name])){
                        foreach($request->varient_image[$getColor->color_name] as $key=>$varient_image){
                            $imagePath = Picture::uploadPicture('assets/web/product/',$varient_image);
                            $allImageDetail[] = $colorImage[] = $imagePath;
                        }
                    }
                    $colorVarientDetail[] = [
                                               'id'          => $color,
                                               'color_name'  => $getColor->color_name,
                                               'colorImage'  => $colorImage,
                                            ];
                }
                 
            }

            //Get size details only in array
            $sizeDetail =[];
            if($request->size != null ){
                foreach($request->size as $key=>$size){
                    $getSize = $this->size->where(['id'=>$size,'status'=>1])->first();
                    $sizeDetail[] = [
                                        'id'    => $size,
                                        'size'  => $getSize->size,
                                        'type'  => $getSize->type,
                                     ];
                }  
            }
            
            //Get color varient details with image in array
            $sizeVarientDetail = [];
            if($request->size != null ){
                foreach($request->size as $key=>$size){
                    $getSize = $this->size->where(['id'=>$size,'status'=>1])->first();
                    
                    $sizeVarientDetail[] = [
                                                'id'     => $size,
                                                'size'   => $getSize->size,
                                                'type'   => $getSize->type,
                                                'price'  => (!empty($request->price[$key])) ? $request->price[$key]: null,
                                                'gst'    => (!empty($request->price[$key])) ? $request->price[$key]: null,
                                           ];
                } 
            }
            
            $genImage = [];
            if(isset($request->product_img)){
                foreach($request->product_img as $key=>$product_img){
                    $genImagePath = Picture::uploadPicture('assets/web/product/',$product_img);
                    $genImage[] = $genImagePath;
                }
            }
            
            $specification = null;
            if($request->hasFile('specification')){
                $specification = Picture::uploadPicture('assets/web/specification/',$request->specification);
            }
            for($i=0; $i<=98;$i++){
            $productDetail = [
                               'slug'                => Slug::largeSlug() ??'',
                               'name'                => $request->product_name ??'',
                               'description'         => $request->description ??'',
                               'is_varient_available'=> 1 ??'',
                               'category_id'         => $request->category ??'',
                               'subCategory_id'      => $request->subcategory ??'',
                               'sup_subCategory_id'  => $request->supersubcategory ??'',
                               'gen_image'           => json_encode($genImage) ??'',
                               'hsn_code'            => $request->hsn_code ??'',
                               'color'               => json_encode($colorDetail) ??'',
                               'color_varient'       => json_encode($colorVarientDetail) ??'',
                               'color_varient_images'=> json_encode($allImageDetail) ??'',
                               'specification'       => $specification ??'',
                               'moq'                 => $request->moq ??'',
                               'material'            => json_encode($materialDetail) ??'',
                               'size'                => json_encode($sizeDetail) ??'',
                               'size_varient'        => json_encode($sizeVarientDetail) ??'',
                               'gen_price'           => $request->general_price ??'',
                               'gen_gst'             => $request->general_gst ??'',
                               'meta_url'            => $request->product_name ??'',
                               //'gen_stock'           => $request->pp ??'',
                               //'make_in'             => $request->pp ??'',
                               //'status'              => $request->pp ??'',
                               //'tags'                => $request->pp ??'',
                               //'meta_tags'           => $request->pp ??'',
                               //'is_varient_available'=> $request->pp ??'',
                               'added_by'            => Masked::getUserId() ??'',
                            ];
            

                $this->product->create($productDetail);
            }
            return redirect()->back()->with(['success'=>"Product Added Successfully !!"]);
        }catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        } 
    }
    
    /**
     * @method Edit the product 
     * @param slug
     * @return Edit page
     */
    public function edit($slug)
    {
        dd($slug);
    }

    /**
     * @method Update the product 
     * @param Request $request
     * @return Update page
     */
    public function update(EditRequest $request)
    {
        dd($request->all());
    }
    
    /**
     * @method Change status
     * @param 
     * @return Change status response
     */
    public function status(Request $request)
    {
        try{
            $getDetail = $this->product->whereSlug($request->slug)->first();
            $key = "";
            if($getDetail->status == 1){
                $data = [
                            'status'     => 0 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->product->whereSlug($request->slug)->update($data);
                $key = "Disable";
            }else{
                $data = [
                            'status'     => 1 ??'',
                            'updated_by' => Masked::getUserId() ??'',
                        ];
                $this->product->whereSlug($request->slug)->update($data);
                $key = "Live";
            }

            CreateAppLog::getErrorLog("Product status changed by ".Masked::getUserName());
            return response()->json([
                                     'status'     => 200,
                                     'statusName' => $key,
                                     'success'    => "Staus changed successfully !!"
                                    ]);

        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Change product status requested by ".Masked::getUserName());
            return response()->json([
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }
}
