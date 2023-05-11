<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('photo', function (Blueprint $table) {
            $table->id();
            $table->integer("id_user");
            $table->string("url")->nullable();
            $table->string("nama_photo");
            $table->string("path_photo");
            $table->text("desc_photo");
            $table->text("tags_photo");
            $table->integer("is_private");
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('photo');
    }
};
