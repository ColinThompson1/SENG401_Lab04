<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use App\Models\Book;
use App\Models\User;

class CommentsController extends Controller
{
    public function store($isbn)
    {
      if(auth()->user()->role == 'subscriber')
      {
        $book = Book::where('isbn', $isbn)->get()->first();
        $book_id = $book -> id;
        $user_id = auth()->id();
        Comment::create([
          'user_id' => $user_id,
          'book_id' => $book_id,
          'text' => request('text'),
        ]);

        //$comments = $book->comments;
        //return view('pages.book-detail', compact('book', 'comments'));
        return redirect()->back();
      }
      else
      {
        //$book = Book::where('isbn', $isbn)->get()->first();
        //$comments = $book->comments;
        //return view('pages.book-detail', compact('book', 'comments'))->with('message', 'Must be a subscriber to leave a comment');
        return redirect()->back()->with('alert', 'Must be a subscriber to leave a comment');
      }
    }
}
