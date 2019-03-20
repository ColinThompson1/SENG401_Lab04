<html>
    @include('partials.header')

    <img class="card-img-top" src="{{$book->image}}" style="max-width: 256px">
    <h2> {{$book->title}} </h2>

    <p><b>Author(s): </b> {{ $book->authors->pluck('name') }}</p>
    <p><b>Year: </b> {{ $book->year }}</p>
    <p><b>Publisher: </b> {{ $book->publisher }}</p>
    <p><b>ISBN: </b> {{ $book->isbn }}</p>

    @include('partials.footer')


    <h2>Comments</h2>
    <a href="{{ url("/books/$book->isbn/comment") }}" class="btn btn-primary">Add Comment</a>

    @foreach ($comments as $comment)
      @include('partials.commentList', ['comment' => $comment])
    @endforeach


</html>
