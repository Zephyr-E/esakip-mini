<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ikus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('sasaran_renstra_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('indikator');
            $table->string('kendala');
            $table->string('solusi');
            $table->string('tindak_lanjut');
            $table->string('otorisasi');
            $table->string('target');
            $table->string('realisasi');
            $table->string('tahun');
            $table->string('tw_i');
            $table->string('tw_ii');
            $table->string('tw_iii');
            $table->string('tw_iv');
            $table->string('capaian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ikus');
    }
};
