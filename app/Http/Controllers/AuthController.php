<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function index(){
        return view('auth.login');

    }
    public function verify(Request $request){
        dd($request);

    }

    public function logout(){

    }
}
