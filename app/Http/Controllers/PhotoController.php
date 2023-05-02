<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;

/*
    ✅ Boleh dilanjutin di controller photo ini yaa....

*/
class PhotoController extends Controller
{
    public function index(){
        return view("photo.index");
    }
    public function store(){
        /* 😄 your journey starts here 
            bisa pake eloquent, query builder, atau DB::raw... 
        */
        return "store";
    }
    public function upload(){
        /* 😄 your journey starts here 
            bisa pake eloquent, query builder, atau DB::raw... 
        */
        return "upload";
    }
    public function update(){
        /* 😄 your journey starts here 
            bisa pake eloquent, query builder, atau DB::raw... 
        */
        return "update";
    }
}
