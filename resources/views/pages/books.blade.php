<html>
    @include('partials.header')

    <div class="row">
    @foreach ($books as $book)
        @include('partials.book-item', ['book' => $book])
    @endforeach
    </div>

    @include('partials.footer')

</html>
