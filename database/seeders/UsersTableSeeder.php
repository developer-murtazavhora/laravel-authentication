<?php

namespace Database\Seeders;

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
        $user = new \App\Models\User();
        $user->truncate();

        $user->create([
            'name'              => 'Murtaza Vohra',
            'email'             => 'developer.murtazavhora@gmail.com',
            'password'          => bcrypt('123456'),
            'email_verified_at' => \Carbon\Carbon::now()
        ]);
    }
}
