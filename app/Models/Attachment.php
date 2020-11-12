<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;
    /**
     * Un attachment appartien à un user et à sa task
     * 
     * @return void
     */
    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function task(){
        return $this->belongsTo('App\Models\Task');
    }
}
