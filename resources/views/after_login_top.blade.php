@extends('layouts.webbookapp')

@section('title', 'トップメニュー画面')

@section('content')
<button type="button" name="member_register" onclick="location.href='./member_register'">会員登録</button>
<button type="button" name="member_search" onclick="location.href='.member_search'">会員検索</button>
<button type="button" name="document_search" onclick="location.href='./document_search'">資料検索</button>
<button type="button" name="document_add" onclick="location.href='./document_add'">資料追加</button>
<button type="button" name="circulation" onclick="location.href='./circulation'">貸出</button>
<button type="button" name="returns" onclick="location.href='./returns'">返却</button>
@endsection
