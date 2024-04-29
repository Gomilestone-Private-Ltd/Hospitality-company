<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestRoomController extends Controller
{
    public function guestRoomItems(){
        return view('web.guestRoomItems');
    }
}
