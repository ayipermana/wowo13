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
        Schema::create('projecks', function (Blueprint $table) {
            // $table->id();
            $table->integer('id_project');
            $table->string('nama_porject');
            $table->text('foto');
            $table->primary('id_project');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projecks');
    }
};
