<?php

namespace Database\Seeders;

use App\Models\AreaOfUse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Slug;

class AreaOfUseSeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $areaOfUses = ['Lid ','Tissue','Tray','Waste Can'];
        foreach($areaOfUses as $key=> $areaOfUse){
            $areaOfUsesDetail = [
                                    'slug'            => Slug::smallSlug() ??'',
                                    'area_of_use'     => $areaOfUse ??'',
                                    'added_by'        => 1 ??'',
                                ];
            AreaOfUse::create($areaOfUsesDetail);
        }
    }
}
