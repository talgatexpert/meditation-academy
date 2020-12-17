<?php

use App\Models\Comment;
use App\Models\Participant;
use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create('ru_RU');
        $now = now()->subDays(60);

        // Проходимся по всем шагам
        for ($step = 1; $step <= 7; $step++) {
            // Формируем массив всех активных участников на каждом шаге
            $participants = Participant::ofStep($step)->verified()->pluck('id')->toArray();

            // Формируем фейковый отчет от каждого участника
            foreach ($participants as $participant) {
                $report = Comment::create([
                    'participant_id' => $participant,
                    'step' => $step,
                    'body' => $faker->realText(),
                    'created_at' => $now->toDateTimeString(),
                    'updated_at' => $now->toDateTimeString(),
                    'status'    =>  $step === 7 ? random_int(0, 1) : 0
                ]);

                // Случайным образом добавляем в каждый отчет несколько фейковых комментариев
                if (mt_rand(0, 1) == 1) {
                    foreach (\Arr::random($participants, mt_rand(1, 3)) as $participant) {
                        Comment::create([
                            'parent_id' => $report->id,
                            'participant_id' => $participant,
                            'step' => $step,
                            'body' => $faker->realText(),
                            'created_at' => $now->toDateTimeString(),
                            'updated_at' => $now->toDateTimeString(),
                            'status' => 0
                        ]);

                    }
                }

                $now->addDay();
            }
        }
    }

}
