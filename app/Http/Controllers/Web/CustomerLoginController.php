<?php

namespace App\Http\Controllers\Web;

use Hash;
use Slug;
use Token;
use Masked;
use CreateAppLog;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Web\VerifyOtp;
use App\Http\Requests\Web\LoginRequest;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\Web\UpdateProfile;

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
            if(Auth::check()){
                return view($this->customerView.'.dashboard');
            }else{
                return view($this->view.'.login');
            }
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
            $mobile = $request->mobile ??'';
            $fullname = $request->fullname ??'';
            
            $getUser = $this->user->where('contact',$mobile)->first();
            if(empty($getUser)){
                //get Otp
                $token = Token::generateToken();
                Token::setSessionToken($mobile,$token, $fullname);

                return response()->json([
                                            'status'=> 200,
                                            'success'   => "Otp Sent successfully".$token,
                                        ]);
            }else{
                return response()->json(['status'=> 300,'error'  =>"Contact number already registered !!" ]);
            }
            


        }catch(\Exception $e){
            return response()->json(['error'  => $e->getMessage() ]);
        } 
    }


    /**
     * @method 
     * @param
     * @return
     */
    public function verifyOtp(VerifyOtp $request){
        try{
            if(!empty(Token::getSessionToken()[1]) && Token::getSessionToken()[1] == $request->otp){
                //update token 
                $getUserDetail = [
                                    'slug'       => Slug::mediumSlug() ??'',
                                    'name'       => Token::getSessionToken()[0] ??'',
                                    'contact'    => Token::getSessionToken()[2] ??'',
                                    'password'   => Hash::make(Token::getSessionToken()[1]) ??'',
                                    'c_password' => Token::getSessionToken()[2]??'',
                                 ];   

                $this->user->create($getUserDetail); 

               if(Auth::attempt(['contact' => Token::getSessionToken()[2], 'password' => Token::getSessionToken()[1]])){
                    Token::updateSessionToken();
                    return response()->json([
                                                'status'  => 200,
                                                'success' => "OTP verified successfully",
                                            ]);
                }else{
                    Token::updateSessionToken();
                    return response()->json([
                                                'status'    => 300,
                                                'success'   => "Enter valid otp",
                                            ]);
                }                           
                
            }else{
                return response()->json(['status'=> 300, 'error'  =>"Enter valid otp" ]);
            }
        }catch(\Exception $e){
            return response()->json(['error' => $e->getMessage()]);
        } 
    }

    /**
     * @method 
     * @param
     * @return
     */
    public function updateProfile(UpdateProfile $request)
    {
        try{
            $data = [
                      'name'    => $request->fullname ??'',
                      'email'   => $request->email??'',
                      'contact' => $request->mobile ??'',
                    ];
            $this->user->whereSlug($request->slug)->update($data);  
            return redirect()->back()->with(['success' => "Account Updated"]);       
                    
        }catch(\Exception $e){
            return redirect()->back()->with(['error' => $e->getMessage()]);
        }
    }
}
