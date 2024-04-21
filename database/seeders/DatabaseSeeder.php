<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    
    public function run(): void {
        $this->call(BookTableSeeder::class);
        $this->command->info('Таблица книг загружена данными!');

        $this->call(CategoryTableSeeder::class);
        $this->command->info('Таблица категорий загружена данными!');

        $this->call(AuthorTableSeeder::class);
        $this->command->info('Таблица авторов загружена данными!');

        $this->call(UserTableSeeder::class);
        $this->command->info('Таблица пользователей загружена данными!');

        $this->call(LikeTableSeeder::class);
        $this->command->info('Таблица лайков загружена данными!');

        $this->call(CommentTableSeeder::class);
        $this->command->info('Таблица комментариев загружена данными!');

        $this->call(BookCategoryTableSeeder::class);
        $this->command->info('Таблица книг категорий загружена данными!');

        $this->call(BookAuthorTableSeeder::class);
        $this->command->info('Таблица книг авторов загружена данными!');

        

        
    }
}
