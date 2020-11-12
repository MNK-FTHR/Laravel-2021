<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public  $text = [
        'title',
        'Description',
        'state',
    ];

    protected $hidden = [
        'user_id',
        'task_id',
    ];

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function creator(){
        return $this->hasOne('App\Models\User');
    }

    public function takingPart(){
        return $this->hasMany('App\Models\User');
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }
    
    public function attachments(){
        return $this->hasMany(Attachment::class);
    }

    public function board()
    {
        return $this -> belongsTo('App\Models\Board');
    }

    public function category(){
        return $this-> belongsTo(Category::class);
    }
}
