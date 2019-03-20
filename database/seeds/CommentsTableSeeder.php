<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = App\Models\Book::all();
        foreach ($books as $book) {
            factory(App\Models\Comment::class, rand(0, 5))->create([
                'book_id' => $book['id'],
            ]);
        }
    }
}
