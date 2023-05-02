<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController as Auth;
use App\Http\Controllers\PhotoController as Photo;

Route::middleware(["guest"])->group(function(){
    Route::get("/signin", [Auth::class, "signin_index"])->name("signin.index");
    Route::post("/signin", [Auth::class, "signin_process"])->name("signin.process");
    Route::get("/signup", [Auth::class, "signup_index"])->name("signup.index");
    Route::post("/signup", [Auth::class, "signup_process"])->name("signup.process");
});
Route::middleware(["auth"])->group(function(){
    Route::post("/logout", [Auth::class, "logout"])->name("logout");
    Route::get('/', function () {return view('index');});

    // photo controller
    Route::get("/photo", [Photo::class, "index"])->name("photo.index");
    Route::post("/photo", [Photo::class, "store"])->name("photo.upload");
    Route::post("/photo/update", [Photo::class, "update"])->name("photo.update");
    Route::post("/photo/delete", [Photo::class, "destroy"])->name("photo.delete");
});
