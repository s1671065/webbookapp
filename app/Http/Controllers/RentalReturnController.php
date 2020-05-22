<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\RentalReturnRequest;
use Validator;
use App\Rental;
use App\Document;
class RentalReturnController extends Controller
{
  //吉川さん
  public function index(Request $request)
  {
    return view('returns.returns', ['msg'=>'資料IDを入力下さい。']);
  }
  public function post(Request $request)
  {
    //カタログIDが入力されているかチェック
    $rules = [
      'catalog_id' => 'required',
    ];

   $messages = [
     'catalog_id.required' => '資料IDを入力して下さい。',
   ];
   $validator = Validator::make($request->all(), $rules,
   $messages);

   if ($validator->fails()) {
     return redirect('/returns')
     ->withErrors($validator)
     ->withInput();
   }
   //資料テーブルにカタログIDが存在するかチェック
    $item = Document::where('catalog_id', $request->catalog_id)->first();
    if ($item === NULL) {
    $validator->errors()->add('no_catalog', 'この資料は存在しません。');
    return redirect('/returns')
    ->withErrors($validator)
    ->withInput();
  }
   //貸出台帳にカタログIDが存在するかチェック
   $item = Rental::where('catalog_id', $request->catalog_id)->whereNull('rental_returndate')->first();
   if ($item === NULL) {
   $validator->errors()->add('no_rental', 'この資料は貸し出されていません。');
   return redirect('/returns')
   ->withErrors($validator)
   ->withInput();
   }

   //処理完了
    return view('returns.return_complete');

}}
