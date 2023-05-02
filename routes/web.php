<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController as Auth;

Route::middleware(["guest"])->group(function(){
    Route::get("/signin", [Auth::class, "signin_index"])->name("signin.index");
    Route::post("/signin", [Auth::class, "signin_process"])->name("signin.process");
    Route::get("/signup", [Auth::class, "signup_index"])->name("signup.index");
    Route::post("/signup", [Auth::class, "signup_process"])->name("signup.process");
});
Route::middleware(["auth"])->group(function(){
    Route::post("/logout", [Auth::class, "logout"])->name("logout");
    Route::get('/', function () {return view('master-layout.index');});
});
