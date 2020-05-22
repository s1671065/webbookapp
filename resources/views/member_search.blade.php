@extends('layouts.form')
@section('content')
  <form method="post" action="/member_search_result">
   @csrf
   <input type="text" name="user_email" required>
    <input type="submit" value="検索">
  </form>
@endsection
