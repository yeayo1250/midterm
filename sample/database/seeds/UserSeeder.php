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
        $data = [
            [
                'lname' => 'cambangay',
                'fname' => 'kyle',
                'address' => 'bentih, Calape, Bohol',
                'phone' => '029118712176',
                'email' => 'kylecambangay@gmail.com',
                'password' => bcrypt('password')
            ],

            [
                'lname' => 'cabrera',
                'fname' => 'christian',
                'address' => 'bangta, kkorea',
                'phone' => '09543398101',
                'email' => 'bts@gmail.com',
                'password' => bcrypt('password')
            ]
        ];

        foreach($data as $usr){
            \App\User::create($usr);
        }
    }
}
