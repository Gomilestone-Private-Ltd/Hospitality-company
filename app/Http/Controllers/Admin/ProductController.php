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
use App\Models\AreaOfUse;
use App\Models\IdealFor;
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

    #Bind Model AreaOfUse
    protected $areaOfUse;
    
    #Bind Model IdealFor
    protected $idealFor;

    #Bind Model Category
    protected $category;

    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(Product $product,Category $category,Material $material, Color $color,Size $size,IdealFor $idealFor,AreaOfUse $areaOfUse)
    {
        $this->size          = $size;
        $this->color         = $color;
        $this->product       = $product;
        $this->material      = $material;
        $this->category      = $category;
        $this->areaOfUse     = $areaOfUse;
        $this->idealFor      = $idealFor;
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
            $getColors  = $this->color->where('status',1)->get();
            $getSize    = $this->size->where('status',1)->get();
            $categories = $this->category->where('status',1)->get();
            $materials  = $this->material->where('status',1)->get();
            $idealFor   = $this->idealFor->where('status',1)->get();
            $areaOfUse  = $this->areaOfUse->where('status',1)->get();
            
            return view($this->view.'.create')->with([
                                                      'categories'   => $categories,
                                                      'getColors'    => $getColors,
                                                      'getSizes'     => $getSize,
                                                      'materials'    => $materials,
                                                      'areaOfUses'   => $areaOfUse,
                                                      'idealFor'     => $idealFor
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
            //Create Product First 
            $productDetail = [
                              'slug'                => Slug::largeSlug() ??'',
                              'name'                => $request->product_name ??'',
                              'description'         => $request->description ??'',
                              'is_varient_available'=> 1 ??'',
                              'category_id'         => $request->category ??'',
                              'subCategory_id'      => $request->subcategory ??'',
                              'sup_subCategory_id'  => $request->supersubcategory ??'',
                              'hsn_code'            => $request->hsn_code ??'',
                              'moq'                 => $request->moq ??'',
                              'gen_price'           => $request->general_price ??'',
                              'gen_gst'             => $request->general_gst ??'',
                              'meta_url'            => $request->product_name ??'',
                              'is_recommended'      =>($request->recommended != null && !empty($request->recommended)) ? 1 : 0,
                              'added_by'            => Masked::getUserId() ??'',
                              ];
            $getProductDetail = $this->product->create($productDetail);

            //Get material details only in array
            $materialIdDetail = [];
            $materialDetail   = [];
            if($request->material != null ){
                //$materialDetail = [];
                foreach($request->material as $key=>$material){
                    $getMaterial = $this->material->where(['id'=>$material,'status'=>1])->first();
                    $materialIdDetail[] = $material;
                    $materialDetail[] = [
                                          'id'       => $material,
                                          'material' => $getMaterial->name,
                                        ];
                }  
            }

            //Get area Of Use details only in array
            $areaOfUseIdDetail = [];
            $areaOfUseDetail   = [];
            if($request->areaOfuse != null ){
                foreach($request->areaOfuse as $key=>$areaOfuse){
                    $getAreaOfuse = $this->areaOfUse->where(['id'=>$areaOfuse,'status'=>1])->first();
                    $areaOfUseIdDetail[] = $areaOfuse;
                    $areaOfUseDetail[] = [
                                          'id'          => $areaOfuse,
                                          'area_of_use' => $getAreaOfuse->area_of_use,
                                        ];
                }  
            }

            //Get area Of Use details only in array
            $idealForIdDetail = [];
            $idealForDetail   = [];
            if($request->idealfor != null ){
                foreach($request->idealfor as $key=>$idealfor){
                    $getIdealFor = $this->idealFor->where(['id'=>$idealfor,'status'=>1])->first();
                    $idealForIdDetail[] = $idealfor;
                    $idealForDetail[] = [   
                                          'id'          => $idealfor,
                                          'ideal_for'   => $getIdealFor->ideal_for,
                                        ];
                }  
            }
            
            //Get color details only in array
            $colorIdDetail =[];
            $colorDetail =[];
            if($request->color != null ){
                foreach($request->color as $key=>$color){
                    $getColor = $this->color->where(['id'=>$color,'status'=>1])->first();
                    $colorIdDetail[] = $color;
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
                            $imagePath = Picture::uploadToS3('/product/'.$getProductDetail->id,$varient_image);
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
            $sizeIdDetail =[];
            $sizeDetail = [];
            if($request->size != null ){
                foreach($request->size as $key=>$size){
                    $getSize = $this->size->where(['id'=>$size,'status'=>1])->first();
                    $sizeIdDetail[] = $size;
        
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
                    $genImagePath = Picture::uploadToS3('/product/'.$getProductDetail->id,$product_img);
                    $genImage[] = $genImagePath;
                }
            }
            
            $specification = null;
            if($request->hasFile('specification')){ 
                $specification = Picture::uploadToS3('/product/'.$getProductDetail->id.'/specification',$request->specification);
            }
            
            $updateProductDetail = [
                                     'gen_image'           => json_encode($genImage) ??'',
                                     'color'               => json_encode($colorDetail) ??'',
                                     'color_id'            => json_encode($colorIdDetail) ??'',
                                     'color_varient'       => json_encode($colorVarientDetail) ??'',
                                     'color_varient_images'=> json_encode($allImageDetail) ??'',
                                     'specification'       => $specification ??'',
                                     'material'            => json_encode($materialDetail) ??'',
                                     'material_id'         => json_encode($materialIdDetail) ??'',
                                     'size_id'             => json_encode($sizeIdDetail) ??'',
                                     'size'                => json_encode($sizeDetail) ??'',
                                     'ideal_for_id'        => json_encode($idealForIdDetail) ??'',
                                     'ideal_for'           => json_encode($idealForDetail) ??'',
                                     'area_of_use_id'      => json_encode($areaOfUseIdDetail) ??'',
                                     'area_of_use'         => json_encode($areaOfUseDetail) ??'',
                                     'size_varient'        => json_encode($sizeVarientDetail) ??'',
                                    ];
            $this->product->whereId($getProductDetail->id)->update($updateProductDetail);
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
        try{
            $getProduct = $this->product->whereSlug($slug)->first();
            if(empty($getProduct)){
                return redirect()->back()->with(['error' => "Unauthorized Access"]);
            }else{
                $getColors = $this->color->where('status',1)->get();
                $getSize = $this->size->where('status',1)->get();
                $categories = $this->category->where('status',1)->get();
                $materials = $this->material->where('status',1)->get();
                $idealFor   = $this->idealFor->where('status',1)->get();
                $areaOfUse  = $this->areaOfUse->where('status',1)->get();

                return view($this->view.'.edit')->with([
                                                        'getProduct'   => $getProduct,
                                                        'categories'   => $categories,
                                                        'getColors'    => $getColors,
                                                        'getSizes'     => $getSize,
                                                        'materials'    => $materials,
                                                        'areaOfUses'   => $areaOfUse,
                                                        'idealFor'     => $idealFor
                                                    ]);
            }
            
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Edit product requested by ".Masked::getUserName().' having Error '.$e->getMessage());
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }

    /**
     * @method Update the product 
     * @param Request $request
     * @return Update page
     */
    public function update(EditRequest $request,$slug)
    {
       try{
            $getProductDetail = $this->product->whereSlug($slug)->first();
            
            //Get material details only in array
            $materialIdDetail = [];
            $materialDetail   = [];
            if($request->material != null ){
                $materialDetail = [];
                foreach($request->material as $key=>$material){
                    $getMaterial = $this->material->where(['id'=>$material,'status'=>1])->first();
                    $materialIdDetail[] = $material;
                    $materialDetail[] = [
                                          'id'       => $material,
                                          'material' => $getMaterial->name,
                                        ];
                }  
            }else{
                $materialIdDetail = $getProductDetail->material_id;
                $materialDetail   = $getProductDetail->material;
            }
            
            //Get area Of Use details only in array
            $areaOfUseIdDetail = [];
            $areaOfUseDetail   = [];
            if($request->areaOfuse != null ){
                foreach($request->areaOfuse as $key=>$areaOfuse){
                    $getAreaOfuse = $this->areaOfUse->where(['id'=>$areaOfuse,'status'=>1])->first();
                    $areaOfUseIdDetail[] = $areaOfuse;
                    $areaOfUseDetail[] = [
                                          'id'          => $areaOfuse,
                                          'area_of_use' => $getAreaOfuse->area_of_use,
                                        ];
                }  
            }else{
                $areaOfUseIdDetail = $getProductDetail->area_of_use_id;
                $areaOfUseDetail   = $getProductDetail->area_of_use;
            }

            //Get area Of Use details only in array
            $idealForIdDetail = [];
            $idealForDetail   = [];
            if($request->idealfor != null ){
                foreach($request->idealfor as $key=>$idealfor){
                    $getIdealFor = $this->idealFor->where(['id'=>$idealfor,'status'=>1])->first();
                    $idealForIdDetail[] = $idealfor;
                    $idealForDetail[] = [   
                                          'id'          => $idealfor,
                                          'ideal_for'   => $getIdealFor->ideal_for,
                                        ];
                }  
            }else{
                $idealForIdDetail = $getProductDetail->ideal_for_id;
                $idealForDetail   = $getProductDetail->ideal_for;
            }

            //Get color details only in array
            $colorIdDetail =[];
            $colorDetail =[];
            if($request->color != null ){
                foreach($request->color as $key=>$color){
                    $getColor = $this->color->where(['id'=>$color,'status'=>1])->first();
                    $colorIdDetail[] = $color;
                    $colorDetail[] = [
                                        'id'          => $color,
                                        'color_name'  => $getColor->color_name,
                                        'color_code'  => $getColor->color_code,
                                    ];
                }  
            }else{
                $colorIdDetail =[];
                $colorDetail =[];
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
                            $imagePath = Picture::uploadToS3('/product/'.$getProductDetail->id,$varient_image);
                            $allImageDetail[] = $colorImage[] = $imagePath;
                        }
                    }
                    
                    //If no image uploded get old one
                    if(count($colorImage)){
                        $colorVarientDetail[] = [
                                                 'id'          => $color,
                                                 'color_name'  => $getColor->color_name,
                                                 'colorImage'  => $colorImage,
                                                ];
                    }else{
                        $getOldArrayImage = "";
                        foreach($getProductDetail->color_varient as $colorvarientData){
                            //dd($colorvarientData->color_name, $getColor->color_name);
                            if($colorvarientData->color_name == $getColor->color_name){
                                $getOldArrayImage = $colorvarientData->colorImage;
                            }
                        }
                        $colorVarientDetail[] = [
                                                  'id'          => $color,
                                                  'color_name'  => $getColor->color_name,
                                                  'colorImage'  => $getOldArrayImage,
                                                ];
                    }
                    
                }
 
                if(count($allImageDetail)){
                    $allImageDetail = array_merge($allImageDetail,$getProductDetail->color_varient_images);
                }else{
                    $allImageDetail = $getProductDetail->color_varient_images;
                }
                 
            }else{
                $colorVarientDetail = $getProductDetail->color_varient;
                $allImageDetail = $getProductDetail->color_varient_images;
            }

            //Get size details only in array
            $sizeIdDetail =[];
            $sizeDetail = [];
            if($request->size != null ){
                foreach($request->size as $key=>$size){
                    $getSize = $this->size->where(['id'=>$size,'status'=>1])->first();
                    $sizeIdDetail[] = $size;
        
                    $sizeDetail[] = [
                                        'id'    => $size,
                                        'size'  => $getSize->size,
                                        'type'  => $getSize->type,
                                     ];
                }  
            }else{
                $sizeIdDetail = $getProductDetail->size_id;
                $sizeDetail   = $getProductDetail->size;
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
                                                'gst'    => (!empty($request->gst[$key])) ? $request->gst[$key]: null,
                                           ];
                } 
            }else{
                $sizeVarientDetail = $getProductDetail->size_varient;
            }

            $genImage = [];
            if(isset($request->product_img)){
                foreach($request->product_img as $key=>$product_img){
                    $genImagePath = Picture::uploadToS3('/product/'.$getProductDetail->id,$product_img);
                    $genImage[] = $genImagePath;
                }
                $genImage = array_merge($genImage,$getProductDetail->gen_image);
            }else{
                $genImage = $getProductDetail->gen_image;
            }
            
            $specification = null;
            if($request->hasFile('specification')){ 
                $specification = Picture::uploadToS3('/product/'.$getProductDetail->id.'/specification',$request->specification);
            }else{
                $specification = $getProductDetail->specification;
            }

        $updateProductDetail = [
                                'name'                => $request->product_name ??'',
                                'description'         => $request->description ??'',
                                'is_varient_available'=> 1 ??'',
                                'category_id'         => $request->category ??'',
                                'subCategory_id'      => $request->subcategory ??'',
                                'sup_subCategory_id'  => $request->supersubcategory ??'',
                                'hsn_code'            => $request->hsn_code ??'',
                                'moq'                 => $request->moq ??'',
                                'gen_price'           => $request->general_price ??'',
                                'gen_gst'             => $request->general_gst ??'',
                                'meta_url'            => $request->product_name ??'',
                                'gen_image'           => json_encode($genImage) ??'',
                                'color'               => json_encode($colorDetail) ??'',
                                'color_id'            => json_encode($colorIdDetail) ??'',
                                'color_varient'       => json_encode($colorVarientDetail) ??'',
                                'color_varient_images'=> json_encode($allImageDetail) ??'',
                                'specification'       => $specification ??'',
                                'material'            => json_encode($materialDetail) ??'',
                                'material_id'         => json_encode($materialIdDetail) ??'',
                                'size_id'             => json_encode($sizeIdDetail) ??'',
                                'size'                => json_encode($sizeDetail) ??'',
                                'ideal_for_id'        => json_encode($idealForIdDetail) ??'',
                                'ideal_for'           => json_encode($idealForDetail) ??'',
                                'area_of_use_id'      => json_encode($areaOfUseIdDetail) ??'',
                                'area_of_use'         => json_encode($areaOfUseDetail) ??'',
                                'size_varient'        => json_encode($sizeVarientDetail) ??'',
                                'is_recommended'      =>($request->recommended != null && !empty($request->recommended)) ? 1 : 0,
                                ];
        
        $this->product->whereId($getProductDetail->id)->update($updateProductDetail);
        return redirect()->back()->with(['success'=>"Product Updated Successfully !!"]);
       }catch(\Exception $e){
          CreateAppLog::getErrorLog("Edit product requested by ".Masked::getUserName().' having Error '.$e->getMessage());
          return redirect()->back()->with(['error' => $e->getMessage()]);
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

    

    /**
     * @method Delete General Image 
     * @param 
     * @return delete response
     */
    public function deleteProductImage(Request $request)
    {
        try{

            $getProduct = $this->product->whereSlug($request->slug)->first();
            if(empty($getProduct)){
                return response()->json([
                                            'status'   => 300,
                                            'error'  => "No Product Found !!"
                                        ]);
            }else{
                
                $msg = "Can't delete all images !!";
                if(in_array($request->path,$getProduct->gen_image) && count($getProduct->gen_image) >1){
                    $getPosition = array_search($request->path,$getProduct->gen_image);
                    $arrayDtaa = $getProduct->gen_image;
                    //Remove element from array
                    array_splice($arrayDtaa,$getPosition,1);
                    Picture::removeFileFromS3($request->path);
                    //Update product Details
                    $getProduct->update(['gen_image'=>json_encode($arrayDtaa)]);
                    $msg = "Image Deleted Successfully !!";
                    return response()->json([
                                                'status'   => 200,
                                                'success'  => $msg
                                            ]);
                }
                return response()->json([
                                        'status'   => 200,
                                        'error'    => $msg
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
     * @method Delete Varient Image 
     * @param 
     * @return delete response
     */
    public function deleteProductVarientImage(Request $request)
    {
        try{
            $getProduct = $this->product->whereSlug($request->slug)->first();
            if(empty($getProduct)){
                return response()->json([
                                            'status'   => 300,
                                            'error'  => "No Product Found !!"
                                        ]);
            }else{
                
                $msg = "Can't delete all images !!";
                if(in_array($request->path,$getProduct->color_varient_images) && count($getProduct->color_varient_images) >1){
                    $getPosition = array_search($request->path,$getProduct->color_varient_images);
                    $arrayDtaa = $getProduct->color_varient_images;
                    //Remove element from array
                    array_splice($arrayDtaa,$getPosition,1);
                    Picture::removeFileFromS3($request->path);

                    //Update product Details
                    $getProduct->update(['color_varient_images'=>json_encode($arrayDtaa)]);
                    $msg = "Image Deleted Successfully !!";
                    return response()->json([
                                                'status'   => 200,
                                                'success'  => $msg
                                            ]);
                }
                return response()->json([
                                        'status'   => 200,
                                        'error'    => $msg
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

}
