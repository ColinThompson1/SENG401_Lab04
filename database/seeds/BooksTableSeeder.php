<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = Reader::createFromPath(base_path().'/database/seeds/csvs/SENG401-Lab4-Books.csv')
            ->setHeaderOffset(0);

        foreach ($csv as $record) {
            DB::table('books')->insert([
                'isbn' => $record['ISBN'],
                'name' => $record['Name'],
                'authors' => Illuminate\Support\Str::random(10),
                'year' => $record['Year'],
                'publisher' => $record['Publisher'],
                'image' => $record['Image'],
            ]);
        }
    }
}
