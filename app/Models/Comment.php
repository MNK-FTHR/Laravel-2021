<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    public $text = [
        'text',

    ];

    protected $hidden = [
        'user_id',
        'task_id',
    ];
    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function Task(){
        return $this->belongsTo(Task::class);
    }
}
