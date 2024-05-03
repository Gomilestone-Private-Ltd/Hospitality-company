<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Size;
use Slug;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sizes = [
                    ['size'=>'Small','type'=>'CMS'],
                    ['size'=>'Large','type'=>'INCH'],
                    ['size'=>'Medium','type'=>'INCH']
                 ];

        foreach($sizes as $key=> $size){
            $colorDetail = [
                                'slug'            => Slug::smallSlug() ??'',
                                'size'            => $size['size'] ??'',
                                'type'            => $size['type'] ??'',
                                'added_by'        => 1 ??'',
                            ];
            Size::create($colorDetail);
        }
    }
}
