<?php

namespace Database\Seeders;

use App\Helper\Slug;
use App\Models\Setting as AppSetting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class Setting extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $setting = [
                        'slug'            => Slug::smallSlug() ??'',
                        'app_name'        => "Opine" ??'',
                        'email'           => "Opine@gmail.com" ??'',
                        'contact'         => "1234567890"??'',
                        'logo'            => "/assets/admin/logo.png" ??'',
                        'favicon'         => "/assets/admin/logo.png" ??'',
                        'address'         => "619 DLF Star Tower, Sector 30, Gurugram, Haryana 122008" ??'',
                        'added_by'        => 1 ??'',
                    ];
        AppSetting::create($setting);
    }
}
