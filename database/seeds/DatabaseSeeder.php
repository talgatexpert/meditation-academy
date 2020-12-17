<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Список сидеров, которые нужно запустить только на локальном
     *
     * @var array
     */
    private $localSeeders = [
        UsersTableSeeder::class,
        ParticipantsTableSeeder::class,
        TemplatesTableSeeder::class,
        MessageTemplatesTableSeeder::class,
        PollsTableSeeder::class,
        CommentsTableSeeder::class,
    ];

    /**
     * Список сидеров, которые нужно запустить только на продакшене
     *
     * @var array
     */
    private $productionSeeders = [
        UsersTableSeeder::class,
        TemplatesTableSeeder::class,
        MessageTemplatesTableSeeder::class,
    ];

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Отключаем логирование и проверку внешних ключей
        DB::disableQueryLog();
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        switch (app()->environment()) {
            case 'local':
                foreach ($this->localSeeders as $seeder) {
                    // Очистка данных
                    DB::table(str_replace('_table_seeder', '', Str::snake($seeder)))->truncate();

                    $this->call($seeder);
                }
                break;

            case 'production':
                foreach ($this->productionSeeders as $seeder) {
                    $this->call($seeder);
                }
                break;
        }

        // Возвращаем все обратно
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
        DB::enableQueryLog();
    }

}
