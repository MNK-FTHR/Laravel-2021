<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'username',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function task(){
        return $this->hasMany('App\Model\Task');
    }

    public function create(){
        return $this->hasMany('App\Model\Task');
    }

    public function Commentary(){
        return $this->hasMany('App\Model\Comment');
    }

    public function Attach(){
        return $this->hasMany('App\Model\Attachment');
    }
}
