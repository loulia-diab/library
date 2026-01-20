<?php

namespace Database\Seeders;

<<<<<<< HEAD
use App\Models\Author;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
=======
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Author;
>>>>>>> 5e9cf6602c51bf27e0ba07ec7b8d000bf8c0e7c9

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
<<<<<<< HEAD
        Author::factory(10)->create();
=======
        $authors = [
            ['name' => 'ahmad'],
            ['name' => 'waseem'],
            ['name' => 'hala'],
            ['name' => 'sara'],
        ];
        Author::insert($authors);
>>>>>>> 5e9cf6602c51bf27e0ba07ec7b8d000bf8c0e7c9
    }
}
