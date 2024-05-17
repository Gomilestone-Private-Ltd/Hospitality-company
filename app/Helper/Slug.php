<?php 
namespace App\Helper;

use Illuminate\Support\Str;

class Slug{
   
    /**
     * @method Create Small Slug
     * @param
     * @return Small Slug
     */ 
    public static function smallSlug()
    {
        return Str::random(10);
    }
    
    /**
     * @method Create Medium Slug
     * @param
     * @return Medium Slug
     */ 
    public static function mediumSlug()
    {
    	return Str::random(20);
    }
    
    /**
     * @method Create Large Slug
     * @param
     * @return Large Slug
     */ 
    public static function largeSlug()
    {
        return Str::random(30);
    }
    
    /**
     * @method
     * @param
     * @return
     */
    public static function createLeadKey()
    {
       return "GMS-".Str::random(9);
    }
    
    /**
     * @method Get Otp
     * @param
     * @return 6 digit Otp 
     */
    public static function getOtp()
    {
       return random_int(100000, 999999);
    }
}

?>