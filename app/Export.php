<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
  protected $table = "abm_summary";
  protected $fillable = ['id','nama_pt','nomor_kontrak','vendor','jenis_sewa','ns_a','ns_b','ns_c1','ns_c2','ns_d1','ns_d2','is_1','is_2','is_3','is_4','is_5','is_6','is_7','komponen','lokasi','start_date','end_date','nilai_kontrak'];
}
