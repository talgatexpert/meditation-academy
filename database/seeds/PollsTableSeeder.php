<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class PollsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Создаем 500 фейковых опросов в истории успеха участников
        $values = [];
        for ($i = 1; $i <= 500; $i++) {
            $values[] = [
                'name' => 'reasons',
                'option' => Arr::random(['effectiveness', 'emotional_stability', 'positive_experiences', 'self_awareness']),
                'created_at' => now()->toDateTimeString(),
            ];
        }
        \DB::table('polls')->insert($values);
    }

}
