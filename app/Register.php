<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Register extends Model
{
  // 資料追加のバリデーション
  protected $guarded = array('catalog_id');
  public static $document_add_rules = array(
    'catalog_number'  => 'integer|digits_between:10, 13|required',
  );

  public static $document_add_messages = array(
    'catalog_number.integer' => 'ISBNは半角数字で入力してください',
    'catalog_number.digits_between' => 'ISBNは10桁または13桁で入力してください',
    'catalog_number.required' => 'ISBNは必須です',
  );
}
