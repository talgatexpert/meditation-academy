<?php

use App\Models\MessageTemplate;
use Illuminate\Database\Seeder;

class MessageTemplatesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Добро пожаловать!
        MessageTemplate::create([
            'name' => MessageTemplate::WELCOME,
            'title' => 'Добро пожаловать!',
            'body' => trim(file_get_contents(__DIR__ . '/templates/message/' . MessageTemplate::WELCOME . '.html')),
        ]);

        // Шаг 2. Медитация на ладонях
        MessageTemplate::create([
            'name' => MessageTemplate::STEP2,
            'title' => 'Шаг 2. Медитация на ладонях',
            'body' => trim(file_get_contents(__DIR__ . '/templates/message/' . MessageTemplate::STEP2 . '.html')),
        ]);

        // Шаг 3. «Динамическая» медитация
        MessageTemplate::create([
            'name' => MessageTemplate::STEP3,
            'title' => 'Шаг 3. «Динамическая» медитация',
            'body' => trim(file_get_contents(__DIR__ . '/templates/message/' . MessageTemplate::STEP3 . '.html')),
        ]);

        // Шаг 4. «Поплавок»
        MessageTemplate::create([
            'name' => MessageTemplate::STEP4,
            'title' => 'Шаг 4. «Поплавок»',
            'body' => trim(file_get_contents(__DIR__ . '/templates/message/' . MessageTemplate::STEP4 . '.html')),
        ]);

        // Шаг 5. День осознанности
        MessageTemplate::create([
            'name' => MessageTemplate::STEP5,
            'title' => 'Шаг 5. День осознанности',
            'body' => trim(file_get_contents(__DIR__ . '/templates/message/' . MessageTemplate::STEP5 . '.html')),
        ]);

        // Шаг 6. Счет и внутренняя дисциплина
        MessageTemplate::create([
            'name' => MessageTemplate::STEP6,
            'title' => 'Шаг 6. Счет и внутренняя дисциплина',
            'body' => trim(file_get_contents(__DIR__ . '/templates/message/' . MessageTemplate::STEP6 . '.html')),
        ]);

        // Шаг 7. Осознанность и благодарность
        MessageTemplate::create([
            'name' => MessageTemplate::STEP7,
            'title' => 'Шаг 7. Осознанность и благодарность',
            'body' => trim(file_get_contents(__DIR__ . '/templates/message/' . MessageTemplate::STEP7 . '.html')),
        ]);
        // Сертификат
        MessageTemplate::create([
            'name' => MessageTemplate::CERTIFICATE,
            'title' => 'Поздравляем ваш сертификат',
            'body' => trim(file_get_contents(__DIR__ . '/templates/message/' . MessageTemplate::CERTIFICATE . '.html')),
        ]);
    }

}
