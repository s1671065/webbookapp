@extends('layouts.form')

@section('title','資料検索画面')

@section('content')
{{--検索--}}
<p>検索したい資料名を入力してください。</p>
<form action="/document_search_result" method="post">
  @csrf
  <input type="search" name="catalog_name" placeholder="資料名を入力">
  <input type="submit" value-"検索" name="search_button">　</button>
</form>

{{--戻るボタン--}}
  <button type="button" name="return_button" onclick="location.href='./after_login_top'">戻る</button>

@endsection
