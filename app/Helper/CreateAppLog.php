<?php
namespace App\Helper;
use Illuminate\Support\Facades\Log;

class CreateAppLog{

    /**
     * @method Info Log
     * @param
     * @return Create response
     */
    public static function getInfoLog($message)
    {
        return Log::channel('daily')->info($message);
    }

    /**
     * @method Warning Log
     * @param
     * @return create response
     */
    public static function getWarningLog($message){
       return Log::channel('daily')->warning($message);
    }

    /**
     * @method Error Log
     * @param
     * @return create response
     */
    public static function getErrorLog($message){
       return Log::channel('daily')->error($message);
    }

    /**
     * @method  Emergency Log
     * @param
     * @return create response
     */
    public static function getEmergencyLog($message){
        return Log::channel('daily')->emergency($message);
    }
}
