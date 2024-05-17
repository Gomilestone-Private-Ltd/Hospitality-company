<?php

namespace App\Http\Controllers\Web;

use Slug;
use Masked;
use CreateAppLog;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserLoginController extends Controller
{
    #Bind the view
    protected $view = "admin.masters.areaofuse";

    #Bind Model User
    protected $user;

    /**
     * @method Define default constructor for controller
     * @param
     * @return
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        
    }
    
    /**
     * @method 
     * @param
     * @return
     */
    public function index(){
       // dd(Slug::getOtp());
    }
}
