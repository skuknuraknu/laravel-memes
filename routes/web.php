<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController as Auth;
use App\Http\Controllers\PhotoController as Photo;
use App\Http\Controllers\FeedController as Feed;
use App\Http\Controllers\UserController as Users;
use App\Http\Controllers\MarketController as Market;

Route::middleware(["guest"])->group(function(){
    Route::get("/signin", [Auth::class, "signin_index"])->name("signin.index");
    Route::post("/signin", [Auth::class, "signin_process"])->name("signin.process");
    Route::get("/signup", [Auth::class, "signup_index"])->name("signup.index");
    Route::post("/signup", [Auth::class, "signup_process"])->name("signup.process");
});

Route::middleware(["auth"])->group(function(){
    Route::post("/logout", [Auth::class, "logout"])->name("logout");
    Route::get("/", [Feed::class, "index"]);
    Route::post("/feed/komentar", [Feed::class, "commentFeed"]);
    // photo controller
    Route::get("/photo", [Photo::class, "index"])->name("photo.index");
    Route::post("/photo", [Photo::class, "store"])->name("photo.upload");
    Route::post("/photo/meme_kamu/edit", [Photo::class, "edit"])->name("meme_kamu.edit_process");
    Route::post("/photo/delete", [Photo::class, "destroy"])->name("photo.hapus");
    Route::post("/photo/comment", [Photo::class, "comment"])->name("photo.comment");
    // users controller
    Route::get("/users", [Users::class, "index"])->name("users.index");
    Route::post("/users", [Users::class, "store"])->name("users.store");
    Route::post("/users/delete", [Users::class, "destroy"])->name("users.destroy");
    //marketplace
    Route::get("/market", [Market::class, "index"])->name("market.index");

    Route::get("/about", function(){
        return view("about");
    });
});
