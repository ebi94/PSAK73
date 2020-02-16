<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Export;

use App\Exports\DataExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class ExportController extends Controller
{
    public function export_excel()
  	{
  		return Excel::download(new DataExport, 'KKP_Assessmen_Leasing.xlsx');
    }
}
