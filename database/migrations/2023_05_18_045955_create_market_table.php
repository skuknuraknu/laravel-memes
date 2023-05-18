<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('market', function (Blueprint $table) {
            $table->id();
            $table->integer("id_user");
            $table->string("nama_barang");
            $table->string("harga_barang");
            $table->string("lokasi_barang");
            $table->string("gambar_barang");
            $table->string("is_sold");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('market');
    }
};
