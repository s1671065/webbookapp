<?php

namespace App\Http\Controllers;

use App\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;

class MemberController extends Controller
{
    public function edit_member(Request $request){
      // 会員情報をDBから取ってくる処理など記述する箇所
      $user_id = 1; # あとで$id = $request->id;に書き換えよう
      $user_data = DB::table('members')->where('user_id', $user_id)->first();
      return view('member_edit', ['user_data' => $user_data]);
    }

    public function edit_member_check(Request $request){
      $this->validate($request, Member::$edit_member_rules, Member::$edit_member_messages);
      $edit_member_data = $request->all();
      $request->session()->put($edit_member_data);
      return view('member_edit_confirming', compact("edit_member_data"));
    }

    public function update_member(Request $request){
      $edit_member_data = $request->all();
      // // 新しい会員情報に更新する処理を記述する箇所
      //
      $request->session()->put($edit_member_data);
      // 教科書p219参考
      $user_id = 1; //TODO あとで変える
      $param = [
        'user_name' => $request->user_name,
        'user_address' => $request->user_address,
        'user_tel' => $request->user_tel,
        'user_email' => $request->user_email
      ];
      // 会員情報のアップデート
      DB::table('members')->where('user_id', $user_id)->update($param);

      // アップデート後のデータを取得
      $user_data = DB::table('members')->where('user_id', $user_id)->first();
      return view('member_edit_complete', ['user_data' => $user_data]);
    }
}
