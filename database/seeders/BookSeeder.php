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
                'judul' => 'Belajar Laravel 12',
                'penulis' => 'Andika Dwi Santoso',
                'penerbit' => 'Informatika',
                'tahun_terbit' => 2025,
                'kategori' => 'Pemrograman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Pemrograman Web Modern',
                'penulis' => 'Rizky Pratama',
                'penerbit' => 'Andi Publisher',
                'tahun_terbit' => 2024,
                'kategori' => 'Pemrograman',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'judul' => 'Basis Data PostgreSQL',
                'penulis' => 'Abdul Kadir',
                'penerbit' => 'Elex Media',
                'tahun_terbit' => 2023,
                'kategori' => 'Database',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}