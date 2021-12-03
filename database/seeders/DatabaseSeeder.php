<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Product;
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
        User::create([
            "name" => "bogeng",
            "email" => "bogeng@example.com",
            "password" => bcrypt('halo'),
            "role" => "admin",
        ]);
        User::factory(10)->create();
        Product::factory(10)->create();
    }
}
