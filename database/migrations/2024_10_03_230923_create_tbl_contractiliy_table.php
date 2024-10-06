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
        Schema::create('tbl_contractiliy', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sample_id')->unsigned();
            $table->foreign('sample_id')
                ->references('id')
                ->on('tbl_sample');
            $table->integer('frequency_id')->unsigned();
            $table->foreign('frequency_id')
                ->references('id')
                ->on('tbl_frequency');
            $table->bigInteger('frequency');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_contractiliy');
    }
};
