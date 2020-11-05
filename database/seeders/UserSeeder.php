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
        User::factory(9)->create();
        User::create([
            'name' => 'Miquel Guix',
            'email' => 'marquezguix@gmail.com',
            'password' => bcrypt('685496886')
        ]);
    }
}
