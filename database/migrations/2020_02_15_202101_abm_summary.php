<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AbmSummary extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abm_summary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_pt')->nullable();
            $table->string('nomor_kontrak')->nullable();
            $table->string('vendor')->nullable();
            $table->string('jenis_sewa')->nullable();
            $table->string('ns_a')->nullable();
            $table->string('ns_b')->nullable();
            $table->string('ns_c1')->nullable();
            $table->string('ns_c2')->nullable();
            $table->string('ns_d1')->nullable();
            $table->string('ns_d2')->nullable();
            $table->string('is_1')->nullable();
            $table->string('is_2')->nullable();
            $table->string('is_3')->nullable();
            $table->string('is_4')->nullable();
            $table->string('is_5')->nullable();
            $table->string('is_6')->nullable();
            $table->string('is_7')->nullable();
            $table->string('komponen')->nullable();
            $table->string('lokasi')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('nilai_kontrak')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('abm_summary');
    }
}
