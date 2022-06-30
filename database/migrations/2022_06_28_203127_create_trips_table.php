<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->foreignId('start_station_id')->constrained('stations');
            $table->foreignId('end_station_id')->constrained('stations');
            $table->timestamp('start_datetime');
            $table->timestamp('end_datetime');
            $table->foreignId('train_id')->constrained('trains');
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
        Schema::dropIfExists('trips');
    }
};
