<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TaskUser extends Pivot
{
    use HasFactory;

    /**
     * Liens entre task et user
     *
     * @return void
     */
    public function Task()
    {
        return $this -> belongsTo('App\Models\Task');
    }

    public function User()
    {
        return $this -> belongsTo('App\Models\User');
    }
}
