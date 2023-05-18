<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Models\Comment;


class FeedController extends Controller
{
    public function index(){
        // 0 => tidak privates
        // 1 => private
        $memes = Photo::with("comments")
        ->join('users', 'users.id', '=', 'photo.id_user')
        ->select("users.id as id_admin", "users.name", "photo.*",)->
        where(function ($query) {
            $query->where('photo.is_private', '=', 0);
        })->get();
        return view("feed.index", compact("memes"));
    }
    public function commentFeed(){
        Comment::create([
            "id_user" => Auth()->user()->id,
            "nama_user" => Auth()->user()->name,
            "id_post" => request()->id_video,
            "komentar" => request()->comment,
        ]);
        return redirect("/")->with("message", "Berhasil komen");
    }
        
}
