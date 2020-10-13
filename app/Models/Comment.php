<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public function belongTo(){
        return $this->belongsTo('App\Models\User', 'foreign_key');
    }

    public function creator(){
        return $this->hasOne('App\Models\User', 'foreign_key');
    }
}
