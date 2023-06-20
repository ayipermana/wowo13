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
        Schema::create('profils', function (Blueprint $table) {
            // $table->id();   
            $table->integer('nis');
            $table->string('nama');
            $table->enum('jk',['L','P']);
            $table->string('ttl');
            $table->text('alamat');
            $table->text('sekolah');
            $table->text('foto');
            $table->text('about');
            $table->primary('nis');



               
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profils');
    }
};
