<html>
    @include('partials.header')

    <img class="card-img-top" src="{{$book->image}}" style="max-width: 256px">
    <h2> {{$book->title}} </h2>

    <p><b>Author(s): </b> {{ $book->authors->toArray() }}</p>
    <p><b>Year: </b> {{ $book->year }}</p>
    <p><b>Publisher: </b> {{ $book->publisher }}</p>
    <p><b>ISBN: </b> {{ $book->isbn }}</p>

    @include('partials.footer')

</html>
