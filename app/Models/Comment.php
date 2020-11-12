<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    /**
     * Un comment possède un utilisateur et est sur une task
     *
     * @return void
     */
    public function User(){
        return $this->belongsTo('App\Models\User');
    }

    public function Task(){
        return $this->belongsTo(Task::class);
    }
}
