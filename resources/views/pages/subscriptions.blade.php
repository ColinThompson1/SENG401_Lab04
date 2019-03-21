@extends('layouts.app')

@section('content')
@if (session('alert'))
<div class="alert alert-success">
    {{ session('alert') }}
</div>
@endif

<style>
  .uper {
    margin-top: 40px;
  }
</style>
<div class="uper">
    <table class="table table-striped">
        <thead>
            <tr>
            <td>ID</td>
            <td>User Id</td>
            <td>Book Name</td>
            <td colspan="2">Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach($subs as $sub)
            <tr>
                <td>{{$sub->id}}</td>
                <td>{{$sub->user_id}}</td>
                <td>{{$sub->book_id}}</td>
                <td>
                    <button class="btn btn-danger" formaction="{{ Auth::user()->unsubscribe($sub->book_id) }}">Unsubscribe</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
<div>
@endsection
