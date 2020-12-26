<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Создаем супер-админов
        $emails = explode('|', config('auth.super_admin.email'));
        $passwords = explode('|', config('auth.super_admin.password'));
        $names = explode('|', config('auth.super_admin.name'));
        for ($i = 0; $i < count($emails); $i++) {
            User::create([
                'email' => $emails[$i],
                'password' => $passwords[$i],
                'role' => User::ROLE_ADMIN,
                'name' => $names[$i],
            ]);
        }

        // Создаем 10 фейковых пользователей (только на локальном)
        if (app()->environment('local')) {
            factory(App\Models\User::class, 50)->create();
        }
    }

}
