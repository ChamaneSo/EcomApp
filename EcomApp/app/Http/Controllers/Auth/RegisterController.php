<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class RegisterController extends Controller
{
    public function showForm(){
        return view('auth.register');
    }

    public function createUser(Request $request){
        $this->validate($request , [
            'name' => 'required|string',
            'password' => ['required' , 'string' , Password::min(6)->letters()->symbols()->numbers() , 'confirmed'],
            'email' => 'required|string|email|unique:users',
            'phone' => 'required|numeric',
            'terms' => 'required',
            'type' => 'required|in:merchant,client'
        ]);
        $user = User::create([
            'name' => $request->name,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'phone' => $request->phone,
            'type' => $request->type
        ]);
        Auth::login($user);
        return redirect()->route('merchants.index');
    }
}
