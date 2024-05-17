<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Admin\LoginRequest;
use App\Helper\CreateAppLog;
use App\Helper\Masked;
use App\Helper\Picture;
use App\Http\Requests\Setting\ProfileEditRequest;

class LoginController extends Controller
{
    #Bind the view
    protected $view = 'admin.auth';
    
    #Bind model Admin
    protected $admin;

    /**
     * @method
     * @param
     * @return
     */
    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
    }

    /**
     * @method
     * @param
     * @return
     */
    public function index()
    {
        if(Auth::guard('admin')->check()){
            return redirect('/admin/dashboard');
        }else{
            return view($this->view.'.login'); 
        }
        
    }

    /**
     * @method
     * @param
     * @return
     */
    public function login(LoginRequest $request)
    {
        try{
            $credential = $request->only('email','password');
            if(!Auth::guard('admin')->attempt($credential)){
                CreateAppLog::getWarningLog('Login Requested - Invalid Credential !!');
                return redirect()->back()->with([
                                                'error'=>"Please enter valid credential"
                                               ]);
            }else{
                if(Auth::guard('admin')->user()->status == 1){

                    CreateAppLog::getInfoLog('Login Requested By - '.Masked::getUserName());
                    return redirect('/admin/dashboard')->with([
                                                               'success' => Masked::getUserRole()." Login Successfully !!"
                                                              ]);
                }else{   

                    CreateAppLog::getWarningLog('Login Requested By-'.Masked::getUserName()." access restricted !!");
                    Auth::guard('admin')->logout();
                    return redirect()->back()->with([
                                                     'error' => "Please enter valid credential"
                                                    ]);
    
                }
            }
        }catch(\Exception $e){
            CreateAppLog::getErrorLog($e);
            return redirect()->back()->with([
                                             'error'=>"Somthing went Wrong !!" ??'',
                                            ]);
        }

    }

    /**
     * @method
     * @param
     * @return
     */
    public function dashboard()
    {
        return view($this->view.'.dashboard'); 
    }

    /**
     * @method Edit Profile
     * @param 
     * @return edit page
     */
    public function edit()
    {
        $getProfile = $this->admin->whereId(Masked::getUserId())->first();
        return view($this->view.'.profile')->with(['getProfile'=>$getProfile]); 
    }

    
    /**
     * @method Update Profile
     * @param  Request detail
     * @return response
     */
    public function update(ProfileEditRequest $request)
    {
        try{
            $userDetail = [
                            'name'            => $request->name ??'',
                            'contact'         => $request->contact ??'',
                            'avtar'           => ($request->hasFile('avtar')) ? Picture::uploadPicture('assets/profile/',$request->avtar) : Masked::getUserAvtar() ??'',
                            'address'         => $request->address ??'',
                            'password'        => ($request->password) ? Hash::make($request->password):Masked::getUserPassword() ??'',
                            'c_password'      => ($request->password) ? $request->password : Masked::getUserCPassword() ??'',
                            'updated_by'      => Masked::getUserId() ??'',
                          ];
            $this->admin->whereId(Masked::getUserId())->update($userDetail);   
            CreateAppLog::getInfoLog('Profile updated By - '.Masked::getUserName()); 
            return redirect()->back()->with([
                                              'success' => "Profile updated successfully !!" ??'',
                                            ]);           
        }catch(\Exception $e){
            CreateAppLog::getErrorLog($e);
            return redirect()->back()->with([
                                             'error'=>"Somthing went Wrong !!" ??'',
                                            ]);
        }
    }

    /**
     * @method Logout Admin
     * @param 
     * @return response
     */
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin')->with(['success'=>"Logout Successfully !!"]);
    }
}
