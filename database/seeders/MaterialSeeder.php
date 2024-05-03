<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;
use Slug;


class MaterialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $materials = ['LEATHERETTE','METAL','WOOD','GLASS'];
        foreach($materials as $key=> $material){
            $colorDetail = [
                                'slug'            => Slug::smallSlug() ??'',
                                'name'            => $material ??'',
                                'added_by'        => 1 ??'',
                            ];
            Material::create($colorDetail);
        }
    }
}
