<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BoardUser extends Model
{
    use HasFactory;

     public function User()
    {
        return $this -> belongsTo('App\Models\User');
    }

    public function Tasks()
    {
        return $this -> hasMany(Task::class);
    }

    public function Board()
    {
        return $this -> belongsTo('App\Models\Board');
    }
}
