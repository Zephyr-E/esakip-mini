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
        Schema::create('program_indikators', function (Blueprint $table) {
            $table->id();
            $table->foreignId('program_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('indikator');
            $table->string('satuan')->nullable();
            $table->string('target')->nullable();
            $table->string('tahun')->nullable();
            $table->string('tw_i')->nullable();
            $table->string('tw_ii')->nullable();
            $table->string('tw_iii')->nullable();
            $table->string('tw_iv')->nullable();
            $table->string('pagu_i')->nullable();
            $table->string('pagu_ii')->nullable();
            $table->string('pagu_iii')->nullable();
            $table->string('pagu_iv')->nullable();
            $table->string('capaian')->nullable();
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
        Schema::dropIfExists('program_indikators');
    }
};
