<?php

namespace Database\Factories;

use App\Models\Task;
use App\Models\Comment;
use App\Models\User;
use App\Models\Board;
use App\Models\Category;

use App\Models\TaskUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class TaskFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Task::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $d = $this->faker->dateTimeBetween(now(), '+3 months');
        $date = $d->format('Y-m-d');
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'due_date'=> $date,
            'state' => $this->faker->randomElement($array = array ('todo','in progress','done')),
            'category_id' => \App\Models\Category::factory(),
            'board_id' => \App\Models\Board::factory(),
        ];
    }
}
