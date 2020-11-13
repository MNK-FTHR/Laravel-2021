<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class BoardUser extends Pivot
{
    use HasFactory;

    /**
     * Lien entre User et board
     * 
     * @return void
     */
    public function User()
    {
        return $this -> belongsTo('App\Models\User');
    }

    public function task()
    {
        return $this -> hasMany(Task::class);
    }

    public function Board()
    {
        return $this -> belongsTo('App\Models\Board');
    }
}
