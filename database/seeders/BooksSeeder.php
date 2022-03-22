<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'title' => 'El Principito',
            'author' => 'Antoine de Saint-Exupiere',
            'editorial' => 'Salamandra',
            'year' => '2015',
            'language' => 'Español',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
