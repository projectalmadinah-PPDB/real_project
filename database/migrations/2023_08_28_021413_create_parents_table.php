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
        Schema::create('parents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('father_name');
            $table->string('father_phone');
            $table->string('father_job');
            $table->string('mother_name');
            $table->string('mother_phone');
            $table->string('mother_job');
            $table->string('parent_earning'); // penghasilan orang tua
            $table->string('no_of_sibling'); //jumlah soudara
            $table->string('child_no'); // anak ke
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parents');
    }
};
