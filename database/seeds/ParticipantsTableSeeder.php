<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class ParticipantsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Создаем 200 фейковых участников
        factory(App\Models\Participant::class, 200)->create();
    }

}
