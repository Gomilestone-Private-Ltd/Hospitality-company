<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Color;
use Slug;
class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $colors = [
                   ['color_name'=>'Red','color_code'=>'#567676'],
                   ['color_name'=>'Blue','color_code'=>'#563361'],
                   ['color_name'=>'Green','color_code'=>'#1456fr']
                  ];

        foreach($colors as $key=> $color){
            $colorDetail = [
                                'slug'            => Slug::smallSlug() ??'',
                                'color_name'      => $color['color_name'] ??'',
                                'color_code'      => $color['color_code'] ??'',
                                'added_by'        => 1 ??'',
                            ];
            Color::create($colorDetail);
        }
    }
}
