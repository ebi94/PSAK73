<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
  protected $table = "data_tables";
  protected $fillable = ['id','title','contract_no','vendor','criteria'];
}
