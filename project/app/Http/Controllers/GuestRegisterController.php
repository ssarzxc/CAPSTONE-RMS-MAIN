<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class GuestRegisterController extends Controller
{
    public function index(){
        if(Auth::guest()){
            return view('admin.guest-register');
        } else {
            return view('welcome');
        }
    }
}
