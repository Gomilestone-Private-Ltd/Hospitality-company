<?php

namespace App\Http\Controllers\Admin;

use App\Helper\Slug;
use App\Helper\Masked;
use App\Helper\Picture;
use App\Models\Setting;
use App\Helper\CreateAppLog;
use App\Http\Requests\Setting\GeneralEditRequest;
use App\Http\Requests\Setting\GeneralCreateRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    #Bind the view
    protected $view = 'admin.setting';
    
    #Bind setting Model
    protected $setting;
    
    public function __construct(Setting $setting)
    {
        $this->setting = $setting;
    }
    /**
     * @method
     * @param
     * @return
     */
    public function index()
    {
        $getSettingDetail = $this->setting->whereId(1)->first();
        return view($this->view.'.index')->with(['getSettingDetail'=>$getSettingDetail]);
    }

    /**
     * @method Update General Setting
     * @param request
     * @return response
     */
    public function update(GeneralEditRequest $request)
    {
        try{
            $getSettingDetail = $this->setting->whereId(1)->first();
            if(!empty($getSettingDetail)){
                $categoryDetail = [
                                    'app_name'        => $request->app_name ??'',
                                    'email'           => $request->email ??'',
                                    'contact'         => $request->contact ??'',
                                    'logo'            => ($request->hasFile('logo')) ? Picture::uploadPicture('assets/logo/',$request->logo) : $getSettingDetail->logo ??'',
                                    'favicon'         => ($request->hasFile('favicon')) ? Picture::uploadPicture('assets/favicon/',$request->favicon) : $getSettingDetail->favicon ??'',
                                    'address'         => $request->address ??'',
                                    'updated_by'      => Masked::getUserId() ??'',
                                 ];
                CreateAppLog::getInfoLog(Masked::getUserName()." updated general setting ");
                $this->setting->whereId(1)->update($categoryDetail);
            }else{
                $categoryDetail = [
                                    'app_name'        => $request->app_name ??'',
                                    'email'           => $request->email ??'',
                                    'contact'         => $request->contact ??'',
                                    'logo'            => ($request->hasFile('logo')) ? Picture::uploadPicture('assets/logo/',$request->logo) : '' ??'',
                                    'favicon'         => ($request->hasFile('favicon')) ? Picture::uploadPicture('assets/favicon/',$request->favicon) : '' ??'',
                                    'address'         => $request->address ??'',
                                    'added_by'        => Masked::getUserId() ??'',
                                  ];
                CreateAppLog::getInfoLog(Masked::getUserName()." created general setting ");
                $this->setting->create($categoryDetail);
            }
            return redirect()->back()->with([
                                                'success' =>"Updated successfully !!"
                                            ]);
        }catch(\Exception $e){
            CreateAppLog::getErrorLog("Updated general setting requested by ".Masked::getUserName());
            return redirect()->back()->with([
                                             'error' => $e->getMessage()
                                            ]);
        }
    }
}
