<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ma_giam_gias', function (Blueprint $table) {
            $table->id();
            $table->string('ma_code');
            $table->integer('tinh_trang');
            $table->dateTime('bat_dau');
            $table->dateTime('ket_thuc');
            $table->integer('loai_giam')->comment("0: giam_%, 1: tien_mat");
            $table->integer('so_tien_toi_da');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ma_giam_gias');
    }
};
