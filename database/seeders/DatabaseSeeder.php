<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $array =["todo", "ongoing", "done"];
        DB::table('task')->insert([
            'title'=> Str::random(10),
            'description'=> Str::random(10),
            'due_date'=> Carbon::create('2000', '01', '01'),
            'state'=>Arr::random($array)
        ]);
    }
}
