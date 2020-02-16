<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Data;

use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class DataController extends Controller
{
    public function index()
    {
      $data = DB::table('abm_summary')->get();
    return view('list',['data' => $data]);
    }

    // public function index()
  	// {
  	// 	$data = Data::all();
  	// 	return view('list',['data' => $data]);
  	// }

  	public function export_excel()
  	{
  		return Excel::download(new DataExport, 'data.xlsx');
  	}
}
