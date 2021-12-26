<?php

namespace Database\Seeders;

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
<<<<<<< HEAD
        // \App\Models\User::factory(10)->create();
        $this->call(ItemSeeder::class);
=======
        User::create([
            'name' => "Russell",
            "email" => "russell@gmail.com",
            "password" => bcrypt("russell"),
            "address" => "Kebon Jeruk",
            "gender" => "Male",
        ]);

        User::create([
            'name' => "Kevin",
            "email" => "admin@gmail.com",
            "password" => bcrypt("admin"),
            "address" => "Ciledug",
            "gender" => "Male",
            "role" => "Admin"
        ]);
>>>>>>> c2c360f57b1357e14b91e8dd24403e22ee24123e
    }
}
