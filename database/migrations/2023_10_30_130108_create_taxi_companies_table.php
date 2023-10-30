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
        Schema::create('taxi_companies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->unsignedBigInteger('plot_id')->nullable();
            $table->foreign('plot_id')->references('id')->on('plots');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taxi_companies');
    }
};
