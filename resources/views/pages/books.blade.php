@extends('layouts.app')

@section('content')
    <div class="row">
    @foreach ($books as $book)
        @include('partials.book-item', ['book' => $book])
    @endforeach
    </div>
@endsection
