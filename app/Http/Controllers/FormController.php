<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
  public function index()
  {
    $data = DB::table('data_tables')->get();
    return view('datalist',['data' => $data]);
  }

  public function add(Request $request)
  {
  	// insert data ke table pegawai
  	DB::table('data_tables')->insert([
  		'title' => $request->title,
  		'contract_no' => $request->contract_no,
  		'criteria' => $request->criteria,
  		'vendor' => $request->vendor
  	]);
  	// alihkan halaman ke halaman pegawai
  	return redirect('/input');
  }

}
