<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ModelBook;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(ModelBook $book)
    {
        $book->create([
            'title'=>'Senhor dos Anéis',
            'pages'=>'300',
            'price'=>'199.99',
            'id_user'=>'1',
        ]);

        $book->create([
            'title'=>'Nome do Vento',
            'pages'=>'600',
            'price'=>'49.99',
            'id_user'=>'2',
        ]);

        $book->create([
            'title'=>'Titanic',
            'pages'=>'190',
            'price'=>'17.89',
            'id_user'=>'1',
        ]);

        $book->create([
            'title'=>'Biografia Roberto',
            'pages'=>'30',
            'price'=>'2.50',
            'id_user'=>'3',
        ]);

        $book->create([
            'title'=>'A onda',
            'pages'=>'190',
            'price'=>'11.90',
            'id_user'=>'1',
        ]);
    }
}
