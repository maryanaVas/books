<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->truncate();
        Book::factory()
            ->count(23)
            //->sequence(
            // fn (Sequence $sequence) => ['image_name' => 'images/' . ($sequence->index + 2) . '.jpg'])
            ->create();
    }
}
