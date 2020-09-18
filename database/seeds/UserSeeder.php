<?php

use App\User;
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
        $user = collect([
            [
                'name'      => 'hanan',
                'email'     => 'hasyrawi@gmail.com',
                'password'  => 'password',
            ]
        ]);

        $user->each(function ($user) {
            factory(User::class)->create([
                'name'      => $user['name'],
                'email'     => $user['email'],
                'password'  => $user['password']
            ]);
        });
    }
}
