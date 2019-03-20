<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Book;

class CommentsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->only(['addComment']);
    }

    public function addComment($isbn)
    {
        $book = Book::where('isbn', $isbn)->get()->first();
        $comments = $book->comments;
        if(auth()->user()->role == 'subscriber')
        {
            return view('pages.comment')->with(['book' => $book]);
        }
        else
          return view('pages.book-detail', compact('book', 'comments'));
    }
  // public function show(Book $book)
  // {
  //
  //     return;
  // }
}
