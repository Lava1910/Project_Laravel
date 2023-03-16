<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         \App\Models\User::factory(10)->create();
        $admin = User::create([
            "name"=>"admin",
            "email"=>"admin@localhost",
            "password"=> bcrypt("admin")
        ]);
        Admin::create([
            "user_id"=>$admin->id,
            "role"=>"ADMIN"
        ]);
    }
}
