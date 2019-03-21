<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Book;
use App\Models\Subscription;

class SubscriptionsController extends Controller
{
    /**
    * Only allow access to those who are signed in as valid users
    * To add more restrictions add the method name to the array in only()
    * Or if you want to restrict access for the entirety of BooksController
    * remove only() (eg $this->middleware('auth'))
    */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $subs = Subscription::all();

        return view('pages.subscriptions')->with('subs', $subs);
    }

    public function create(User $user, Book $book)
    {
        $subcription = new Subscription([
            'user_id' => $user->id,
            'book_id' => $book->id,
        ]);
        $subcription->save();
        return redirect('/books/$book->isbn');
    }

    public function delete(User $user, Book $book)
    {
        $sub = Subscription::find('book_id', $book->id);
        $sub->delete();
        return redirect('/books/$book->isbn');
    }
}
