<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;

class Category extends Model
{
    use HasFactory;

    /**
     * Une category possède many tasks
     *
     * @return void
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
