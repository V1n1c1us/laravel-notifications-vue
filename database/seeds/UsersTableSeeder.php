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
        User::create([
            'name' => 'Vinícius Diehl de Franceschi',
            'email' => 'v.f.diehl@gmail.com ',
            'password' => bcrypt('123456')
        ]);
    }
}
