<?php

namespace Database\Seeders;

use App\Models\BookAuthor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookAuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        BookAuthor::factory()->count(10)->create(); 
    }
}
