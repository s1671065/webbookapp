<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
  // 資料追加確認のバリデーション
  protected $guarded = array('catalog_id');
  // TODO バリデーションにはじかれた際に無限ループに入ってしまう問題の解消
  public static $document_add_rules = array(
    'catalog_name' => 'required|max:50',
    'arrival_date' => 'required|date',
    'catalog_code'  => 'required|integer|digits_between:1, 20',
    'catalog_author' => 'required|max:50',
    'catalog_publishername' => 'required|max:50',
    'catalog_publication' => 'required|date',
  );

  public static $document_add_messages = array(
    'catalog_name.required' => '資料名は必須です。',
    'catalog_name.max' => '資料名は50文字以下にしてください',
    'arrival_date.date' => '入荷年月日は日付の形式で入力してください(yyyy/mm/dd)',
    'arrival_date.required' => '入荷年月日は必須です',
    'catalog_code.integer' => '分類コードは半角数字で入力してください',
    'catalog_code.digits_between' => '分類コードは20桁以内で入力してください',
    'catalog_code.required' => '分類コードは必須です',
    'catalog_author.required' => '著者名は必須です',
    'catalog_author.max' => '著者名は:max文字以内で入力してください',
    'catalog_publishername.require' => '出版社名は必須です',
    'catalog_publishername.max' => '出版社名は:max文字以内で入力してください',
    'catalog_publication.required' => '出版日は必須です',
    'catalog_publication.date' => '出版日は日付の形式で入力してください(yyyy/mm/dd)',
  );
}
