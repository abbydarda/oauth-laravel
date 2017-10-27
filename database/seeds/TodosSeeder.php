<?php

use Illuminate\Database\Seeder;

class TodosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('todos')->insert([
        'name_todo'=> "Bangun Pagi",
        'user_id'=>1
       ]);
    }
}
