<?php

namespace App\Http\Controllers\Web;

use Slug;
use Token;
use Masked;
use CreateAppLog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Web\LoginRequest;
use Illuminate\Support\Facades\Session;

class CustomerLoginController extends Controller
{
    #Bind the view
    protected $view = "web.auth";
    
    #Bind dashboard view
    protected $customerView = "web.customer";
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
     * @method View login page
     * @param
     * @return Login page
     */
    public function login()
    {
        try{

            //get Otp
            $token = Token::generateToken();

            //Send otp
           // Token::sendToken("",$token);

            
            //get Otp
            $token = Token::generateToken();

            //Send otp
            //Token::sendToken($contact,$token);

            Session::put('conatct', "9898765432");
            Session::put('token', $token);
            
            dd(Session::get('conatct'), Session::get('token'),$token);
            //if(Auth::check()){
            //     return view($this->customerView.'.dashboard');
            //}else{
            //     return view($this->view.'.login');
            //}
        }catch(\Exception $e){
            return redirect()->back([ 'error'  => $e->getMessage() ]);
        } 
    }

    /**
     * @method Authenticate User
     * @param 
     * @return
     */
    public function authenticateCustomer(LoginRequest $request)
    {
        try{
            $contact = $request->mobile ??'';
            $fullname = $request->fullname ??'';
            if(!empty($mobile)){
                $getUser = $this->user->where('contact',$contact)->first();
                if(empty($getUser)){
                    //Send otp on number
                    //get Otp
                    $token = Token::generateToken();

                    //Send otp
                    Token::sendToken($contact,$token);
                }else{
                    return redirect()->back([ 'error'  =>"Contact number already registered !!" ]);
                }
            }else{
                return redirect()->back([ 'error'  =>"Please Enter Conatct !!" ]);
            }


        }catch(\Exception $e){
            return redirect()->back([ 'error'  => $e->getMessage() ]);
        } 
    }


     /**
     * @method 
     * @param
     * @return
     */
    public function verifyOtp(Request $request){
        // dd(Slug::getOtp());
    }
}
