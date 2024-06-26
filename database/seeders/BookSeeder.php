<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Book::factory()->count(50)->create();
    }
}
