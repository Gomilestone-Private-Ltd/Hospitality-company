<?php 
namespace App\Helper;

use Illuminate\Support\Facades\Session;

class Token{

    /**
     * @method Get token
     * @param
     * @return 6 digit token 
     */
    public static function generateToken()
    {
       return random_int(100000, 999999);
    }
    

    /**
     * @method Send token on contact number
     * @param
     * @return send 6 digit token 
     */
    public static function sendToken($contact, $token)
    {
       
    }


    /**
     * @method Get token from session
     * @param
     * @return response 
     */
    public static function getSessionToken()
    {
        $mobile     = Session::get('mobile');
        $token      = Session::get('token');
        $fullname   = Session::get('fullname');
        return [$fullname, $token, $mobile];
     } 

    /**
     * @method Set token in session
     * @param
     * @return response 
     */
    public static function setSessionToken($mobile , $token , $fullname)
    {
        Session::put('mobile', $mobile);
        Session::put('token', $token);
        Session::put('fullname', $fullname);
        return true;
    }

    /**
     * @method Get token from session
     * @param
     * @return response 
     */
    public static function updateSessionToken()
    {
        Session::put('mobile', "1234567890");
        Session::put('token', '000000');
        Session::put('fullname', "Demo user");
        return true;
    }
}