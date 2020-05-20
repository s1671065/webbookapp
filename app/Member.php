<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    // 会員編集のバリデーション
    protected $guarded = array('user_id');

    public static $edit_member_rules = array(
      'user_name'  => 'max:50|required',
      'user_address' => 'max:200|required',
      'user_tel' => 'max:20|required',
      'user_email' => 'email|max:50|required',
    );

    public static $edit_member_messages = array(
      'user_name.max' => '名前は50文字以下にしてください',
      'user_name.required' => '名前は必須です',
      'user_address.max' => '住所は200文字以下にしてください',
      'user_address.required' => '住所は必須です',
      'user_email.email' => 'メールアドレスの形式にしてください',
      'user_email.max' => 'メールアドレスは50文字以下にしてください',
      'user_email.required' => 'メールアドレスは必須です',
    );
}
