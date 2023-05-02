<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;


class AuthController extends Controller
{
    public function signin_index(){
        return view("auth.signin");
    }
    public function signin_process(){
        $validator = Validator::make(request()->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route("signin.index")
                    ->withErrors($validator)
                    ->withInput();
        }
        if(Auth::attempt(["email" => request()->email, "password" => request()->password])){
            return redirect("/");
        }else{
            return redirect()->route("signin.index")
                    ->withErrors(['msg' => 'Email atau password salah']);
        }
    }
    public function signup_index(){
        $message = "";
        return view("auth.signup", compact("message"));
    }
    public function signup_process(){
        $validator = Validator::make(request()->all(), [
            'username' => 'required|max:100',
            'email' => 'required',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->route("signup.index")
                    ->withErrors($validator)
                    ->withInput();
        }
        User::create([
            "name" => request()->username,
            "email" => request()->email,
            "password" => Hash::make(request()->password)
        ]);
        return redirect()->route("signin.index");
    }
    public function logout(){
        Auth::logout();
        return redirect()->route("signin.index");
    }
}
