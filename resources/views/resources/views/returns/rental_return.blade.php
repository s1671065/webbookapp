@extends('layouts.form')
@section('content')
@error('catalog_id')
<p>{{$message}}</p>
@enderror
@error('no_rental')
<p>abc</p>
@enderror
<p>{{$msg}}</p>
  <form method="post" action="/return_complete">
   @csrf
   <tr><th>資料ID </th><td><input type="text"
     name="catalog_id"></td></tr>
     <input type="button" value="＋">
    <input type="submit" value="返却">
  </form>
@endsection

@section('content')
<form action="/returns" method="post">
@csrf
<input type="text" name="input" value="{{$input}}">
<input type="submit" value="返却">
</form>
@if (isset($item))
<table>

</table>
