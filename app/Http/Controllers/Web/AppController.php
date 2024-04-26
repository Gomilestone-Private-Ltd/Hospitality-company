<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * @method
     * @param
     * @return
     */
    public function index(){
        return view('web.home');
    }
    public function philosophy(){
        return view('web.philosophy');
    }
}
