<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
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
        $id_user = Auth()->user()->id;
        $memes = Photo::with("comments")->
        join('users', 'users.id', '=', 'photo.id_user')
        ->select("users.*", "photo.*")->
        where(function ($query) use ($id_user) {
            $query->where('photo.id_user', '=', $id_user);
        })->get();
        return view("photo.index", compact("memes"));
    }
    public function meme_kamu(){
        $id_user = Auth()->user()->id;
        $photos = Photo::where(function ($query) use ($id_user) {
            $query->where('id_user', '=', $id_user);
        })->get();
        return view("photo.meme_kamu.index", compact('photos'));
    }
    public function edit(){
        Photo::where(["id" => request()->id])->update([
            "nama_photo" => request()->nama_photo,
            "desc_photo" => request()->desc_photo,
            "tags_photo" => request()->tags_photo,
            "is_private" => request()->status,
        ]);
        return redirect()->route("photo.index")->with("message", "Berhasil mengedit meme");
    }
    public function store(){
        $validator = Validator::make(request()->all(), [
            'nama_photo' => 'required',
            'desc_photo' => 'required',
            'tags_photo' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect("/")
                    ->withErrors($validator)
                    ->withInput();
        }
        $image =  time() .'_'. request()->file('meme')->getClientOriginalName();   
        $path = base_path() . '/public/uploads/';
        if(request()->file('meme')->move($path, $image)){
                Photo::create([
                'id_user' => Auth::user()->id,
                'url' => request()->url,
                "nama_photo" => request()->nama_photo,
                "path_photo" => $image,
                "desc_photo" => request()->desc_photo,
                "tags_photo" => request()->tags_photo,
                "is_private" => request()->status
            ]);
            return redirect()->route("photo.index")->with("message", "Berhasil mengupload meme");
        }
        return redirect()->route("photo.index")->with("errors", "Gagal mengupload meme");
    }
    public function update(){
        return "update";
    }
    public function destroy(){
        $file = Photo::where(["id" => request()->id])->get();
        if(File::exists(public_path('uploads/'.$file[0]->path_photo))){
            Photo::where(["id" => request()->id])->delete();
            File::delete('uploads/'.$file[0]->path_photo);
            return redirect()->route("photo.index")->with("message", "Berhasil hapus");
        } else {
           return redirect()->route("photo.index")->with("message", "Gagal hapus");
        }
    }
    public function comment(){
        Comment::create([
            "id_user" => request()->id_user,
            "id_post" => request()->id_video,
            "nama_user" => Auth()->user()->name,
            "komentar" => request()->comment,
        ]);
        return redirect()->route("photo.index")->with("message", "Berhasil komen");
    }
}
