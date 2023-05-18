<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Photo;
use App\Models\Market;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $fillable = [
        'name',
        'email',
        'password',
    ];
    protected $hidden = [
        'password',
    ];
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function photos(){
        return $this->hasMany(Photo::class, 'id_post', 'id');
    }
    public function markets(){
        return $this->hasMany(Market::class, 'id_user', 'id');
    }
    public function comments(){
        return $this->hasMany(Comment::class, 'id_user', 'id');
    }
}
