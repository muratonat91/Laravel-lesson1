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
        Schema::create('Users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('email', 255);
            $table->string('password', 255);
            $table->string('active')->default(1)->comment('aktif :1 - pasif :0');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
