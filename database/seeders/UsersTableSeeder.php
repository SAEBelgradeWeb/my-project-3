<?php

namespace Database\Seeders;


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
           'name' => 'User',
           'lastname' => 'Adminovich',
           'email' => 'abc@abc.com',
           'password' => \Hash::make('password')
        ]);

        User::factory(50)->create();
    }
}
