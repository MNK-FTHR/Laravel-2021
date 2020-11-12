<?php

namespace Database\Factories;

use App\Models\Task;
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
        return [
            'title' => $this->faker->word,
            'description' => $this->faker->sentence($nbWords = 6, $variableNbWords = true),
            'due_date'=> $this->faker->dateTimeThisMonth($max = 'now', $timezone = null),
            'state' => $this->faker->randomElement($array = array ('todo','in progress','done')),
            'category_id' => Category::factory(),
            'board_id' => Board::factory(),
        ];
    }
}
