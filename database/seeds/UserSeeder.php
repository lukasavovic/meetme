<?php

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
        \App\User::create([
            'name' => 'lule',
            'email' => 'lule@gmail.com',
            'password' => bcrypt('lule'),
        ]);
        factory(App\User::class, 20)->create();
    }
}
