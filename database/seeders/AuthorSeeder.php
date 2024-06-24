<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeders.
     */
    public function run(): void
    {
        Author::factory()->count(5)->create();
    }
}
