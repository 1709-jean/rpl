<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username' => 'argow',
                'nama' => 'Argo Wibowo',
                'no_induk' => 123456,
                'no_hp' => '081315927777',
                'email' => 'dosen@gmail.com',
                'password' => bcrypt(123456),
                'role' => 'dosen'
            ],
            [
                'username' => 'jean',
                'nama' => 'Jeanette Purba',
                'no_induk' => 72190352,
                'no_hp' => '08954121111',
                'email' => 'mahasiswa@gmail.com',
                'password' => bcrypt(123456),
                'role' => 'mahasiswa'
            ],
            [
                'username' => 'ppa',
                'nama' => 'ppasiukdw',
                'no_induk' => 111111,
                'no_hp' => '08954121111',
                'email' => 'admin@gmail.com',
                'password' => bcrypt(123456),
                'role' => 'admin'
            ],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
