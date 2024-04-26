<?php

namespace App\Http\Controllers\Web;

use App\Models\Category;
use App\Models\Subcategory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    #Bind the view
    protected $view="";

    #Bind Model Subcategory
    protected $subcategory;
    
    #Bind Model Category
    protected $category;
    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(Category $category, Subcategory $subcategory)
    {
        $this->category = $category;
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
<<<<<<< HEAD

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

=======
    public function philosophy(){
        return view('web.philosophy');
    }
>>>>>>> 7d4bb382c43e0ea440d5b2d5b7aff8d271b34036
}
