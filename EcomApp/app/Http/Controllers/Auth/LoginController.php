<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login(Request $request){
        $this->validate($request , [
            'email' => 'string|email|required',
            'password' => 'required|string'
        ]);
        if (Auth::attempt(['email' => $request->email , 'password' => $request->password] , $request->boolean('remember')))
            return redirect()->route('merchants.index');
        else
            Session::flash('auth.failed' , true);
        return redirect()->route('login');
    }
}
