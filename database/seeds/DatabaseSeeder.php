<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Model::unguard();

        DB::table('users')->delete();

        $users = array(
            ['name' => 'Roberta Randazzo', 'email' => 'r.randazzo85@gmail.com', 'password' => Hash::make('secret')],
            ['name' => 'Cercei Lannister', 'email' => 'cercei@lannister.io', 'password' => Hash::make('secret')],
            ['name' => 'Daenerys Targaryen', 'email' => 'daenerys@targaryen.io', 'password' => Hash::make('secret')],
            ['name' => 'Xena Olympia', 'email' => 'xena@olympia.io', 'password' => Hash::make('secret')],
        );

        // Loop through each user above and create the record for them in the database
        foreach ($users as $user)
        {
            User::create($user);
        }

        Model::reguard();
    }
}