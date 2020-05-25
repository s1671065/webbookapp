<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/after_login_top', function(){
    return view('after_login_top');
});

//岩下
Route::get('/member_withdrawal', 'MemberController@remove_member');
Route::post('/member_withdrawal', 'MemberController@remove_member');
Route::post('/member_withdrawal_complete', 'MemberController@delete_member');
Route::get('/member_withdrawal_complete', function(){
  return view('member_withdrawal_complete');});

Route::get('/document_delete', 'RegisterCatalogController@remove_document');
Route::post('/document_delete_complete', 'RegisterCatalogController@delete_document');
Route::get('/document_delete_complete', function(){
  return view('document_delete_complete');});

// 杉澤
Route::get('/member_edit', 'MemberController@edit_member');
Route::post('/member_edit', 'MemberController@edit_member');
Route::get('/member_edit_confirming', 'MemberController@edit_member_check');
Route::post('/member_edit_confirming', 'MemberController@edit_member_check');
Route::post('/member_edit_complete', 'MemberController@update_member');
Route::get('/document_add', function(){
  return view('document_add');
});
Route::post('document_add', 'RegisterCatalogController@add_document');
Route::get('/document_add_confirming', 'RegisterCatalogController@add_document_check'); //TODO 変える
// Route::get('/document_add_confirming', function(Request $request){
//     $add_document_data = array('catalog_data' => 12345678907);
//     return view('document_add_confirming', $add_document_data);
// });
Route::post('/document_add_confirming', 'RegisterCatalogController@add_document_check');
// Route::get('/document_add_last_confirming', 'RegisterCatalogController@add_document_check');
Route::get('/document_add_last_confirming', function() {
  return view('document_add_last_confirming');
});
Route::post('/document_add_last_confirming', 'RegisterCatalogController@add_document_last_check');
Route::post('/document_add_complete', 'RegisterCatalogController@create_document');

//岡田さん
Route::get('/member_register','MemberController@add_member');
Route::post('/member_register','MemberController@add_member_check');
Route::post('/member_register_complete','MemberController@create_member');

//本間さん
//資料検索画面
Route::get('/document_search', function () {
    return view('document_search');
});
Route::post('/document_search_result','RegisterCatalogController@find_document');

////資料検索結果画面
Route::get('/document_search_result', function () {
    return view('document_search_result');
});

//吉川さん
Route::get('/member_search', 'MemberController@search_member');
// Route::get('/member_search_result', function (){
//   return view('member_search_result');
// });
Route::post('/member_search_result', 'MemberController@find_member');
Route::get('/returns', 'RentalReturnController@index');
Route::get('/return_complete', function (){
  return view('return_complete');
});
Route::post('/return_complete', 'RentalReturnController@post');
