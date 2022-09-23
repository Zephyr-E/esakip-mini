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
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('sasaran_renstra_id')->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('kendala');
            $table->string('solusi');
            $table->string('tindak_lanjut');
            $table->string('otorisasi');
            $table->enum('apbd', ['murni', 'perubahan']);
            $table->string('tahun');
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
        Schema::dropIfExists('programs');
    }
};
