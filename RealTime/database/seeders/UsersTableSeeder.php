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
        User::create([
            'name' => 'Fábio Gilberto',
            'email' => 'fabio.drioli@gmail.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory(10)->create();
    }
}
