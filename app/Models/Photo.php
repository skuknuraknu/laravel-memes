<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Comment;

class Photo extends Model
{
    use HasFactory;
    protected $table = "photo";
    // referensi : https://id-laravel.com/post/mengenal-eloquent-variable-spesial/
    protected $fillable = ["id_user", "url","nama_photo","path_photo","desc_photo","tags_photo", "is_private"];
    public function user(){
        return $this->belongsTo(User::class);
    }
    public function comments(){
        return $this->hasMany(Comment::class, "id_post", "id");
    }
}
