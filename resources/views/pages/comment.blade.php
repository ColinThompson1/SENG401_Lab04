<html>


  <p><b>You are a subscriber</b></p>
  <p><b>Book: </b> {{ $book->name }}</p>

  <form method='POST' action='/books/$book->isbn'>
    {{ csrf_field() }}
      <div>
          <textarea name='comment'></textarea>
      </div>

      <div>
          <button type='submit'>Submit Comment</button>
      </div>
  </form>

</html>
