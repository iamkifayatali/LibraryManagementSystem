<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users= [
            [
            "role_id"=> "1",
            "name" => "Adminkhan",
            "email" =>"adminkhan@gmail.com",
            "password" => bcrypt("asdf1234"),
            ],
            [
                "role_id" => "2",
                "name" => "user khan",
                "email" => "userkhan@gmail.com",
                "password" => bcrypt("asdf1234"),
                ],
            ];
        foreach ($users as $user)
            User::create($user);
    }
}
