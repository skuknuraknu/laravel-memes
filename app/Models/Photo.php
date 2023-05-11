<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    use HasFactory;
    protected $table = "photo";
    // referensi : https://id-laravel.com/post/mengenal-eloquent-variable-spesial/
    protected $fillable = ["id_user","nama_photo","path_photo","desc_photo","tags_photo"];
}
