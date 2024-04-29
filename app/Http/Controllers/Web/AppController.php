<?php

namespace App\Http\Controllers\Web;

use App\Helper\Slug;
use App\Models\Category;
use App\Models\WorkWithUs;
use App\Models\GetInTouch;
use App\Models\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Web\GetInTouchCreateRequest;
use App\Http\Requests\Web\WorkWithUsCreateRequest;
use Picture;

class AppController extends Controller
{
    

    #Bind the view
    protected $view="";

    #Bind Model Subcategory
    protected $subcategory;
    
    #Bind Model Category
    protected $category;

    #Bind Model GetInTouch
    protected $getInTouch;
    
    #Bind Model WorkWithUs
    protected $workWithUs;

    /**
     * @method Define default constructor for controllers
     * @param
     * @return
     */
    public function __construct(Category $category, Subcategory $subcategory,GetInTouch $getInTouch,WorkWithUs $workWithUs)
    {
        $this->category    = $category;
        $this->workWithUs  = $workWithUs;
        $this->getInTouch  = $getInTouch;
        $this->subcategory = $subcategory;
    }

    /**
     * @method
     * @param
     * @return
     */
    public function index(){
        return view('web.home');
    }
    public function philosophy(){
        return view('web.philosophy');
    }

    /**
     * @method Get sub category list
     * @param category id
     * @return sub category list
     */
    public function getSubCategory(Request $request)
    { 
        try{
            $subCategoryList = $this->subcategory->with(['getSuperSubCategory'])
                                                ->where([
                                                        'category_id' => $request->categoryId,
                                                        'status'      => 1
                                                        ])->get();
            $view = view('web.menu.mobile_subcategory')->with([
                                                               'subCategoryList' => $subCategoryList,
                                                               'categoryName'    => $this->category->select('name')->whereId($request->categoryId)->first()
                                                              ])
                                                      ->render();
            return ['data'=>$view,'status'=>200];

        }catch(\Exception $e){
            return response()->json([     
                                     'status' => 300,
                                     'error'  => $e->getMessage()
                                    ]);
        }
    }

    /**
     * @method Get in Touch Form Detail
     * @param 
     * @return response
     */
    public function GetInTouch(GetInTouchCreateRequest $request)
    {
       try{
            $data = [
                    'slug'     => Slug::smallSlug() ??'',
                    'name'     => $request->name ??'',
                    'email'    => $request->email ??'',
                    'message'  => $request->message ??'',
                    ];
            $this->getInTouch->create($data);
            return response()->json([
                                     'success'  => 'Soon we will Contact you !!',
                                    ]);
       }catch(\Exception $e){
            return response()->json([
                                        'errors'  => $e->getMessage()
                                    ]);
       }
    }

    /**
     * @method Work with Us Form 
     * @param 
     * @return response
     */
    public function WorkWithUs(WorkWithUsCreateRequest $request)
    {
       try{
            $data = [
                    'slug'              => Slug::smallSlug() ??'',
                    'name'              => $request->name ??'',
                    'email'             => $request->email ??'',
                    'message'           => $request->message ??'',
                    'file'              => ($request->hasFile('uploadfile')) ? Picture::uploadPicture('work_with_us', $request->uploadfile) : null ,
                    'size'              => ($request->hasFile('uploadfile')) ? Picture::getFileSize($request->uploadfile) : null ,
                    'extention'         => ($request->hasFile('uploadfile')) ? Picture::getFileExtention($request->uploadfile) : null ,
                    'original_file'     => ($request->hasFile('uploadfile')) ? Picture::getPictureDetails($request->uploadfile) : null ,
                    ];
            dd($data);
            
            $this->workWithUs->create($data);
            return response()->json([
                                     'success'  => 'Soon we will Contact you !!',
                                    ]);
       }catch(\Exception $e){
            return response()->json([
                                        'errors'  => $e->getMessage()
                                    ]);
       }
    }
}
