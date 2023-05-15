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
        $user = User::create([
            'name' => 'admin',
            'email' => 'admin@app.com',
            'password' => 'password',
        ]);
       /*  $user->assignRole('ADMIN');

        $user = User::create([
            'name' => 'user',
            'email' => 'user@app.com',
            'password' => 'password',
            'line_id' => '1',
        ]);
        $user->assignRole('USER'); */




    }
}
