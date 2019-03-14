<html>
    @include('partials.header')

    @foreach ($books as $book)
        @include('partials.book-item', ['book' => $book])
    @endforeach

    @include('partials.footer')

</html>
