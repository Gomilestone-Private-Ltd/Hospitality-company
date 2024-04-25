<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Supersubcategory;
use App\Helper\Slug;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category = ['Products by Collection','Products by Use','Products by Material'];
        $subCategory1 = ['LEATHERETTE','METAL','WOOD'];
        $subCategory2 = ['CLASSIC COLLECTION','FEATURED COLLECTION','HAMMERED COLLECTION','C-SHAPE COLLECTION'];
        $subCategory3 = ['GUEST ROOM ITEMS','GUEST BATH ITEMS','PUBLIC AREA AND FRONT OFFICE','F&B','BANQUET'];
        $superSubCategory = ['Menu Item #1','Menu Item #2','Menu Item #3','Menu Item #4','Menu Item #5','Menu Item #6','Menu Item #7'];

        foreach($category as $key=> $categories){
            $categoryDetail = [
                                'slug'      => Slug::smallSlug() ??'',
                                'name'      => $categories ??'',
                                'type'      => ($categories == "Products by Collection") ? 1 : (($categories == "Products by Use") ? 2 : (($categories == "Products by Material") ? 3 : 4)) ,
                                'image'     => ($key==0) ? 'assets/category/DhWHaCVRqM.jpg' :(($key==1) ? 'assets/category/bIyz9MZbmW.jpg': 'assets/category/4EK6HHzNjf.jpg'),
                                'added_by'  => 1 ??'',
                              ];
            $getCategoryId = Category::create($categoryDetail);

            $getCategoryName = ($key == 0) ? $subCategory1 : (($key == 1)? $subCategory2 : $subCategory3);

            foreach($getCategoryName as $subCategories){
                $subcategoryDetail = [
                                        'slug'        => Slug::smallSlug() ??'',
                                        'name'        => $subCategories ??'',
                                        'category_id' => $getCategoryId->id ??'',
                                        'image'       => "assets/category/bIyz9MZbmW.jpg" ??'',
                                        'added_by'    => 1 ??'',
                                    ];
                $getsubCategoryId = Subcategory::create($subcategoryDetail);

                foreach($superSubCategory as $superSubCategories){
                    $supsubcategoryDetail = [
                                                'slug'           => Slug::smallSlug() ??'',
                                                'name'           => $superSubCategories ??'',
                                                'category_id'    => $getCategoryId->id ??'',
                                                'subcategory_id' => $getsubCategoryId->id ??'',
                                                'image'          => "assets/category/bIyz9MZbmW.jpg" ??'',
                                                'added_by'       => 1 ??'',
                                            ];
                    Supersubcategory::create($supsubcategoryDetail);
                }

            }
            

        }
    }
}
