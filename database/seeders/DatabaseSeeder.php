<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
<<<<<<< HEAD
       $this->call([CategorySeeder::class , BookSeeder::class , AuthorSeeder::class]);
=======

       $this->call([
        CategorySeeder::class ,
        BookSeeder::class,
        AuthorSeeder::class,
    ]);

>>>>>>> 5e9cf6602c51bf27e0ba07ec7b8d000bf8c0e7c9
    }
}
