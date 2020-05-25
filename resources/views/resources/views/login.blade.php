@extends('layouts.login_layout')

@section('title','ログイン画面')

@section('content')
  <form class="" action="after_login_top" method="post">
    @csrf
    <table>
      <tr>
        <th>会員ID</th><td><input type="text" name="id" required></td>
      </tr>
      <tr>
        <th>Email</th><td><input type="text" name="id" required></td>
      </tr>
      <tr>
        <th></th><td><input type="submit" class="next_button" value="ログイン"></td>
      </tr>
    </table>
  </form>
@endsection
