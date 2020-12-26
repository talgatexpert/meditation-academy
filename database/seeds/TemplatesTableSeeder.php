<?php

use App\Models\Template;
use Illuminate\Database\Seeder;

class TemplatesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Запрос на подтверждение email участника
        Template::create([
            'name' => Template::PARTICIPANT_EMAIL_CONFIRMATION,
            'subject' => '«7 шагов к медитации» – подтверждение адреса электронной почты',
            'sender' => [
                'email' => 'info@vueberry.com',
                'name' => '7steps',
            ],
            'body' => trim(file_get_contents(__DIR__ . '/templates/email/' . Template::PARTICIPANT_EMAIL_CONFIRMATION . '.html')),
        ]);

        Template::create([
            'name' => Template::PARTICIPANT_GRADUATE,
            'subject' => 'Спасибо за участие!',
            'sender' => [
                'email' => 'info@vueberry.com',
                'name' => '7steps',
            ],
            'body' => trim(file_get_contents(__DIR__ . '/templates/email/' . Template::PARTICIPANT_GRADUATE . '.html')),
        ]);

        // Оповещение участника об ответе куратора
        Template::create([
            'name' => Template::PARTICIPANT_CURATOR_REPLIED,
            'subject' => 'Новый ответ на ваш комментарий',
            'sender' => [
                'email' => 'info@vueberry.com',
                'name' => '7steps',
            ],
            'body' => trim(file_get_contents(__DIR__ . '/templates/email/' . Template::PARTICIPANT_CURATOR_REPLIED . '.html')),
        ]);

        // Письмо ремайндер щаг 4
        Template::create([
            'name' => Template::PARTICIPANT_REMIND_STEP_4,
            'subject' => 'Нужна помощь?',
            'sender' => [
                'email' => 'info@vueberry.com',
                'name' => '7steps',
            ],
            'body' => trim(file_get_contents(__DIR__ . '/templates/email/' . Template::PARTICIPANT_REMIND_STEP_4 . '.html')),
        ]);
        // Письмо ремайндер щаг 5
        Template::create([
            'name' => Template::PARTICIPANT_REMIND_STEP_5,
            'subject' => 'Как проходят ваши «дни осознанности»?',
            'sender' => [
                'email' => 'info@vueberry.com',
                'name' => '7steps',
            ],
            'body' => trim(file_get_contents(__DIR__ . '/templates/email/' . Template::PARTICIPANT_REMIND_STEP_5 . '.html')),
        ]);
        // Письмо ремайндер щаг 5
        Template::create([
            'name' => Template::PARTICIPANT_REMIND_STEP_6,
            'subject' => 'Возвращайтесь!',
            'sender' => [
                'email' => 'info@vueberry.com',
                'name' => '7steps',
            ],
            'body' => trim(file_get_contents(__DIR__ . '/templates/email/' . Template::PARTICIPANT_REMIND_STEP_6 . '.html')),
        ]);
        // Письмо ремайндер щаг 5
        Template::create([
            'name' => Template::PARTICIPANT_REMIND_STEP_7,
            'subject' => 'Не сдавайтесь! Вы почти у цели.',
            'sender' => [
                'email' => 'info@vueberry.com',
                'name' => '7steps',
            ],
            'body' => trim(file_get_contents(__DIR__ . '/templates/email/' . Template::PARTICIPANT_REMIND_STEP_7 . '.html')),
        ]);
    }

}
