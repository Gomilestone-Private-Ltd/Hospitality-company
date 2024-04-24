<?php
namespace App\Traits;

use Illuminate\Http\Request;

trait StatusCode{
    
    #api secret token name
    protected $secretAppName = "leadmaster@gomilstone.com";

    #api success status code
    protected $success = "200";

    #api error status code
    protected $error = "300";

    #api warning status code
    protected $warning = "100";

    #api local url
    protected $localUrl = "http://127.0.0.1:8000/public/";

    #api live url
    protected $liveUrl = "https://crm.gomilestone.com/public/";

}
?>