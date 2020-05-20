<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Register;
use App\Catalog;
use Illuminate\Support\Facades\DB;
use Validator;

class RegisterCatalogController extends Controller
{
    public function add_document(){
      return view('document_add');
    }

    public function add_document_check(Request $request){
      $this->validate($request, Register::$document_add_rules, Register::$document_add_messages);
      $add_document_data = $request->all();
      $request->session()->put($add_document_data);
      return view('document_add_confirming', compact("add_document_data"));
    }

    public function add_document_last_check(Request $request){
      $this->validate($request, Catalog::$document_add_rules, Catalog::$document_add_messages);
      $add_document_data = $request->all();
      $request->session()->put($add_document_data);
      return view('document_add_last_confirming', compact("add_document_data"));
    }

    public function create_document(Request $request){
      $register_param = [
        'catalog_number' => $request->catalog_number,
        'arrival_date' => $request->arrival_date,
      ];
      // 自動増分したカタログIDを取得かつ新規資料データをinsert
      $catalog_id = DB::table('registers')->insertGetId($register_param, 'catalog_id');
      $document_param = [
        'catalog_id' => $catalog_id,
        'catalog_number' => $request->catalog_number,
      ];
      DB::table('documents')->insert($document_param);
      // 同じ本がない場合はcatalogsテーブルにもろもろinsertし、同じ本がある場合はcatalogsテーブルの更新をしない
      if (DB::table('catalogs')->where('catalog_number', $request->catalog_number)->doesntExist()){
        $catalogs_param = [
          'catalog_number' => $request->catalog_number,
          'catalog_name' => $request->catalog_name,
          'catalog_code' => $request->catalog_code,
          'catalog_author' => $request->catalog_author,
          'catalog_publishername' => $request->catalog_publishername,
          'catalog_publication' => $request->catalog_publication,
        ];
        DB::table('catalogs')->insert($catalogs_param);
      }
      $add_document_data = $request->all();
      $request->session()->put($add_document_data);
      return view('document_add_complete', compact("add_document_data"));
    }
}
