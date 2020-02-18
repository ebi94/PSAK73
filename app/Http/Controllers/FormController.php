<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
  public function index()
  {
    $data = DB::table('abm_summary')->get();
    return view('datalist',['data' => $data]);
  }

  public function add(Request $request)
  {
  	DB::table('abm_summary')->insert([
		'nama_pt' => $request->nama_pt,  
		'nomor_kontrak' => $request->nomor_kontrak,
		'vendor' => $request->vendor,
		'jenis_sewa' => $request->jenis_sewa,
		'ns_a' => $request->ns_a,
		'ns_b' => $request->ns_b,
		'ns_c1' => $request->ns_c1,
		'ns_c2' => $request->ns_c2,
		'ns_d1' => $request->ns_d1,
		'ns_d2' => $request->ns_d2,
		'is_1' => $request->is_1,
		'is_2' => $request->is_2,
		'is_3' => $request->is_3,
		'is_4' => $request->is_4,
		'is_5' => $request->is_5,
		'is_6' => $request->is_6,
		'is_7' => $request->is_7,
		'komponen' => $request->komponen,
		'lokasi' => $request->lokasi,
		'start_date' => $request->start_date,
		'end_date' => $request->end_date,
		'nilai_kontrak' => $request->nilai_kontrak,
  	]);
  	return redirect('/input');
  }

public function edit(Request $request)
{
	DB::table('abm_summary')->where('id',$request->id)->update([
		'nama_pt' => $request->nama_pt,  
		'nomor_kontrak' => $request->nomor_kontrak,
		'vendor' => $request->vendor,
		'jenis_sewa' => $request->jenis_sewa,
		'ns_a' => $request->ns_a,
		'ns_b' => $request->ns_b,
		'ns_c1' => $request->ns_c1,
		'ns_c2' => $request->ns_c2,
		'ns_d1' => $request->ns_d1,
		'ns_d2' => $request->ns_d2,
		'is_1' => $request->is_1,
		'is_2' => $request->is_2,
		'is_3' => $request->is_3,
		'is_4' => $request->is_4,
		'is_5' => $request->is_5,
		'is_6' => $request->is_6,
		'is_7' => $request->is_7,
		'komponen' => $request->komponen,
		'lokasi' => $request->lokasi,
		'start_date' => $request->start_date,
		'end_date' => $request->end_date,
		'nilai_kontrak' => $request->nilai_kontrak,
	]);
	return redirect('/list');
}

public function delete($id)
{
	DB::table('abm_summary')->where('id',$id)->delete();
	return redirect('/list');
}

}
