<div class="card" style="width: 18rem;">
    <img class="card-img-top" src="{{$book->image}}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ $book->name }}</h5>
        <p><b>Author(s): </b> {{ $book->authors->pluck('name') }}</p>
        <p><b>Year: </b> {{ $book->year }}</p>
        <p><b>Publisher: </b> {{ $book->publisher }}</p>
        <p><b>ISBN: </b> {{ $book->isbn }}</p>
        <hr>
        <a href="{{ url('/books/$book->isbn') }}" class="btn btn-primary">View Book</a>
    </div>
</div>
