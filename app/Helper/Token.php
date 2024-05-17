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
        $contact = Session::get('contact');
        $token   = Session::get('token');
        return [$contact,$token];
    }

    /**
     * @method Set token in session
     * @param
     * @return response 
     */
    public static function setSessionToken($contact , $token)
    {
        Session::put('conatct', "9898765432");
        Session::put('token', '2378');
        return true;
    }
}