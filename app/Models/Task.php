<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public function user(){
        return $this->belongsTo('App\Models\User', 'foreign_key');
    }

    public function creator(){
        return $this->hasOne('App\Models\User', 'foreign_key');
    }

    public function takingPart(){
        return $this->hasMany('App\Models\User');
    }

    public function Comment(){
        return $this->hasMany('App\Model\Comment');
    }
    public function Attachment(){
        return $this->hasMany('App\Model\Attachment');
    }

    public function Category(){
        return $this->hasOne('App\Model\Category', 'foreign_key');
    }
}
