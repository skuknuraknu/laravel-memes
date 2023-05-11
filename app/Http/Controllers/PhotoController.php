<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

/*
    ✅ Boleh dilanjutin di controller photo ini yaa....

*/
class PhotoController extends Controller
{
    public function index(){
        return view("photo.index");
    }
    public function meme_kamu(){
        $id_user = Auth()->user()->id;
        $photos = Photo::where(function ($query) use ($id_user) {
            $query->where('id_user', '=', $id_user);
        })->get();
        return view("photo.meme_kamu.index", compact('photos'));
    }
    public function edit_meme_kamu(){
        return ":edit";
    }
    public function store(){
        $validator = Validator::make(request()->all(), [
            'nama_photo' => 'required',
            'desc_photo' => 'required',
            'tags_photo' => 'required',
            'meme' => 'required|mimes:png,jpg,jpeg'
        ]);
        if ($validator->fails()) {
            return redirect()->route("photo.index")
                    ->withErrors($validator)
                    ->withInput();
        }

        $image =  time() .'_'. request()->file('meme')->getClientOriginalName();   
        $path = base_path() . '/public/uploads/';
        if(request()->file('meme')->move($path, $image)){
                Photo::create([
                'id_user' => Auth::user()->id,
                "nama_photo" => request()->nama_photo,
                "path_photo" => $image,
                "desc_photo" => request()->desc_photo,
                "tags_photo" => request()->tags_photo,
            ]);
            return redirect()->route("photo.index")->with("message", "Berhasil mengupload meme");
        }
        return redirect()->route("photo.index")->with("errors", "Gagal mengupload meme");
    }
    public function update(){
        /* 😄 your journey starts here 
            bisa pake eloquent, query builder, atau DB::raw... 
        */
        return "update";
    }
    public function destroy($id){
        $file = Photo::where(["id" => $id])->get();
        if(File::exists(public_path('uploads/'.$file[0]->path_photo))){
            Photo::where(["id" => $id])->delete();
            File::delete('uploads/'.$file[0]->path_photo);
            return redirect()->route("meme_kamu.index")->with("message", "Berhasil hapus");
        } else {
           return redirect()->route("meme_kamu.index")->with("message", "Gagal hapus");
        }
    }
}
