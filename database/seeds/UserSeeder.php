<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // seed React API user
        factory(App\User::class)->create([
                "name" => "ReactUser",
                "email" => "ReactUser@React.com",
                "password" => Hash::make("1WQE#%m8BlJc!pyTf!B")
        ]);
    }
}
