<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::insert([
            [
                'title' => 'Belajar Laravel 12',
                'author' => 'Andika Dwi Santoso',
                'publisher' => 'Informatika',
                'year' => 2025,
                'category' => 'Pemrograman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Pemrograman Web Modern',
                'author' => 'Rizky Pratama',
                'publisher' => 'Andi',
                'year' => 2024,
                'category' => 'Pemrograman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Basis Data PostgreSQL',
                'author' => 'Abdul Kadir',
                'publisher' => 'Elex Media',
                'year' => 2023,
                'category' => 'Database',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}