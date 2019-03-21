<?php

use Illuminate\Database\Seeder;
use League\Csv\Reader;

class AuthorsTableSeeder extends Seeder
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
            DB::table('authors')->insert([
                'name' => $record['Authors'],
            ]);
        }
    }
}
