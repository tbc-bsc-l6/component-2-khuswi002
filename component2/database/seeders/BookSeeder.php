<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Book::create([
        'author' => 'John Doe',
        'title' => 'Example Book',
        'pages' => 350,
        'price' => 19.99,
    ]);
}
}
