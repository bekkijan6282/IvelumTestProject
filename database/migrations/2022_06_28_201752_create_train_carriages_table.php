<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('train_carriages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('carriage_type_id')->constrained('train_carriage_types');
            $table->integer('carriage_id');
            $table->foreignId('train_type_id')->constrained('train_types');
            $table->foreignId('train_id')->constrained('trains')->nullable();
            $table->integer('seats_count');
            $table->boolean('is_active')->default(true);
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
        Schema::dropIfExists('train_carriages');
    }
};
