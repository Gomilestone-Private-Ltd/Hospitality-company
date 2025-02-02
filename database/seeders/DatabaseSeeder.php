<?php

namespace Database\Seeders;

use App\Helper\Slug;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;
use App\Models\User;

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
    public function __construct(Admin $admin,User $user, Slug $slug)
    {
        $this->admin       = $admin;
        $this->slug        = $slug;
        $this->user        = $user;
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
        
        //Seed category seeder
        $this->call(ColorSeeder::class);
        
        //Seed SizeSeeder seeder
        $this->call(SizeSeeder::class);
        
        //Seed MaterialSeeder seeder
        $this->call(MaterialSeeder::class);

        //Seed AreaOfUseSeder First
        $this->call(AreaOfUseSeder::class);

        //Seed IdealForSeeder First
        $this->call(IdealForSeeder::class);
        
        //Create superadmin
        $data = [
                 'slug'       => $this->slug->smallSlug() ??'',
                 'role'       => "Superadmin" ??'',
                 'name'       => "Mayur" ??'',
                 'email'      => "admin@gmail.com" ??'',
                 'contact'    => "9098765432" ??'',
                 'avtar'      => "https://opines3.s3.ap-south-1.amazonaws.com/default_images/profile.png" ??'',
                 'status'     =>  1 ??'',
                 'password'   => Hash::make('1234567') ??'',
                 'c_password' => "1234567" ??'',
                 'address'    => "619 DLF Star Tower, Sector 30, Gurugram, Haryana 122008" ??'',
                ];
        //Create admin        
        $user = $this->admin->create($data);

        //Create user
        $userDetail = [
                        'slug'       => $this->slug->smallSlug() ??'',
                        'name'       => "Mayur" ??'',
                        'email'      => "admin@gmail.com" ??'',
                        'contact'    => "9098765432" ??'',
                        'avtar'      => "https://opines3.s3.ap-south-1.amazonaws.com/default_images/profile.png" ??'',
                        'status'     =>  1 ??'',
                        'password'   => Hash::make('1234567') ??'',
                        'c_password' => "1234567" ??'',
                        'address'    => "619 DLF Star Tower, Sector 30, Gurugram, Haryana 122008" ??'',
                     ];

        //Create user
        $this->user->create($userDetail);
        return response()->json(['success'=>"seeded successfully !!"]);
    }
}
