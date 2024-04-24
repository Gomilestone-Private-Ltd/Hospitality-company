<?php 
namespace App\Helper;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class Masked{

	/**
     * @method Get User Role
     * @param
     * @return role
     */ 
    static public function getUserRole()
    {
        return Auth::guard('admin')->user()->role;
    }

    /**
     * @method Get User Id
     * @param
     * @return Id
     */ 
    static public function getUserId()
    {
        return Auth::guard('admin')->user()->id;
    }


    /**
     * @method Get User Name
     * @param
     * @return Small Slug
     */ 
    static public function getUserName()
    {
        return Auth::guard('admin')->user()->name;
    }
    

    /**
     * @method Get User Name
     * @param
     * @return Small Slug
     */ 
    static public function getUserNameByquery($userId)
    {
        $getUserName = Admin::whereId($userId)->first();
        return $getUserName->name;
    }
    
    /**
     * @method Get User Avtar
     * @param
     * @return avtar
     */ 
    static public function getUserAvtar()
    {
        return Auth::guard('admin')->user()->avtar;
    }
    
    /**
     * @method Get User Password
     * @param
     * @return avtar
     */ 
    static public function getUserPassword()
    {
        return Auth::guard('admin')->user()->password;
    }

    /**
     * @method Get User Confirm Password
     * @param
     * @return avtar
     */ 
    static public function getUserCPassword()
    {
        return Auth::guard('admin')->user()->c_password;
    }
    

}

?>