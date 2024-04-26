<?php

namespace Database\Seeders;

use App\Helper\Slug;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;


class DatabaseSeeder extends Seeder
{
    #Bind Model
    protected $admin;

    #Bind Model Permission
    protected $permission;

    #Bind Library Slug
    protected $slug;

    #Bind Model Role
    protected $role;

    /**
     * @method Defining Default Constructor For controller
     * @param 
     * @return 
     */ 
    public function __construct(Admin $admin, Slug $slug)
    {
        $this->admin       = $admin;
        $this->slug        = $slug;
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        //Seed Setting First
        $this->call(Setting::class);
        
        //Seed category seeder
        $this->call(CategorySeeder::class);

        //Create superadmin
        $data = [
                 'slug'       => $this->slug->smallSlug() ??'',
                 'role'       => "Superadmin" ??'',
                 'name'       => "Mayur" ??'',
                 'email'      => "admin@gmail.com" ??'',
                 'contact'    => "9098765432" ??'',
                 'avtar'      => "assets/images/profile.png" ??'',
                 'status'     =>  1 ??'',
                 'password'   => Hash::make('1234567') ??'',
                 'c_password' => "1234567" ??'',
                 'address'    => "619 DLF Star Tower, Sector 30, Gurugram, Haryana 122008" ??'',
                ];
        $user = $this->admin->create($data);
        return response()->json(['success'=>"seeded successfully !!"]);
    }
}
