<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$sEzrmQeGWaQskdeKI4te.OnC0tcaRi0DQYBtnmK9bkoGe2xjZUkjy',
                'remember_token' => null,
                'created_at'     => '2019-09-29 18:57:43',
                'updated_at'     => '2019-09-29 18:57:43',
            ],
        ];

        User::insert($users);
    }
}
