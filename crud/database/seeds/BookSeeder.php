<?php

use Illuminate\Database\Seeder;
use \App\Models\ModelBook;

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
            'title'=>'O senhor dos aneis',
            'pages'=>'40',
            'price'=>'10.50',
            'id_user'=>'1',
        ]);

        $book->create([
            'title'=>'A menina que roubava livros',
            'pages'=>'400',
            'price'=>'100.50',
            'id_user'=>'2',
        ]);

        $book->create([
            'title'=>'O homem',
            'pages'=>'405',
            'price'=>'105.50',
            'id_user'=>'3',
        ]);
    }
}
