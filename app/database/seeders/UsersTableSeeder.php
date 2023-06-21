<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => '管理者ユーザ1',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
    }
}
