<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $newUser = new User();

       $newUser->name = "pippo";
       $newUser->email = "pippo@gmail.com";
       $newUser->password = "pippo12345";

       $newUser->save();

    }
}
