@extends('layouts.app')

@section('content')
  @if (session('alert'))
    <div class="alert alert-success">
        {{ session('alert') }}
    </div>
  @endif

    <img class="card-img-top" src="{{$book->image}}" style="max-width: 256px">
    <h2> {{$book->name}} </h2>
    @if (!Auth::user()->isSubscribed($book->id))
        <button class="btn btn-success" formaction="{{ Auth::user()->subscribe($book) }}">Subscribe</button>
    @else
        <button class="btn btn-danger" formaction="{{ Auth::user()->unsubscribe($book) }}">Unsubscribe</button>
    @endif

    <p><b>Author(s): </b> {{ $book->authors->pluck('name') }}</p>
    <p><b>Year: </b> {{ $book->year }}</p>
    <p><b>Publisher: </b> {{ $book->publisher }}</p>
    <p><b>ISBN: </b> {{ $book->isbn }}</p>

    <!-- @include('partials.footer') -->


    <h2>Comments</h2>
    @foreach ($comments as $comment)
      @include('partials.commentList', ['comment' => $comment])
    @endforeach

    <form method='POST' action="/books/{{$book->isbn}}">
      {{ csrf_field() }}
        <div>
            <label for="text"><b>Enter New Comment</b></label>
            <div>
                <textarea name='text'></textarea>
            </div>
        </div>

        <div>
            <button type='submit'>Submit Comment</button>
        </div>
    </form>
@endsection
