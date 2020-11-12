<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Board extends Model
{
    
    use HasFactory;
    /**
     * Le board appartien à l'owner qu'on reconnais a son id, possède many tasks et many users sont dessus
     * 
     * @return void
     */
    public function tasks()
    {
        return $this -> hasMany(Task::class);
    }

    public function owner()
    {
        return $this -> belongsTo('App\Models\User', 'user_id');
    }

    public function users()
    {
        return $this->belongsToMany(User::class)->using(BoardUser::class);
    }
}