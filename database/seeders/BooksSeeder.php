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
            'autor' => 'Antoine de Saint-Exupiere',
            'editorial' => 'Salamandra',
            'year' => '2015',
            'language' => 'Español',
            'synopsis' => 'El principito trata de la historia de un pequeño príncipe 
                            que parte de su asteroide a una travesía por el universo, 
                            en la cual descubre la extraña forma en que los adultos 
                            ven la vida y comprende el valor del amor y la amistad.',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
