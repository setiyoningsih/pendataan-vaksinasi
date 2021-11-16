<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
        	[

        		'name' => 'admin',
        		'email' => 'admin@gmail.com',
        		'password' => bcrypt('admin1234')
        	],
        ];

        foreach($user as $key => $value) {
        	User::create($value);
        }
    }
}
