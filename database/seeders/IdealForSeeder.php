<?php

namespace Database\Seeders;

use App\Models\IdealFor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Slug;

class IdealForSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $idealFor = ['Room','Hall','Office'];
        foreach($idealFor as $key=> $ideal){
             $idealForDetail = [
                                'slug'            => Slug::smallSlug() ??'',
                                'ideal_for'       => $ideal ??'',
                                'added_by'        => 1 ??'',
                               ];
            IdealFor::create($idealForDetail);
        }
    }
}
