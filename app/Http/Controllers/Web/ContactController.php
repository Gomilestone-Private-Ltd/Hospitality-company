<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class ContactController extends Controller
{
    public function contact(){
        return view('web.contact');
    }
    public function login(){
        return view('web.login');
    }
    public function account(){
        return view('web.account_setting');
    }
    public function cart(){
        return view('web.cart');
    }
}
