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
Route::get('/member_edit', 'MemberController@edit_member');
Route::post('/member_edit', 'MemberController@edit_member');
Route::get('/member_edit_confirming', 'MemberController@edit_member_check');
Route::post('/member_edit_confirming', 'MemberController@edit_member_check');
Route::post('/member_edit_complete', 'MemberController@update_member');
Route::get('/member_search_result', function(){
    return view('member_search_result');
});
Route::get('/document_add', 'RegisterCatalogController@add_document');
Route::get('/document_add_confirming', 'RegisterCatalogController@add_document'); //TODO 変える
Route::post('/document_add_confirming', 'RegisterCatalogController@add_document_check');
Route::get('/document_add_last_confirming', 'RegisterCatalogController@add_document_check');
Route::post('/document_add_last_confirming', 'RegisterCatalogController@add_document_last_check');
Route::post('/document_add_complete', 'RegisterCatalogController@create_document');
