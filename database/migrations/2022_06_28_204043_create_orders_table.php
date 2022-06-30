<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('customer_id')->constrained('users');
            $table->foreignId('trip_id')->constrained('trips');
            $table->foreignId('trip_destination_id')->constrained('trip_carriage_destination_prices');
            $table->decimal('price');
            $table->integer('seat_number');
            $table->boolean('is_valid')->default(true);
            $table->boolean('is_paid')->default(false);
            $table->timestamp('due_datetime');
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
        Schema::dropIfExists('orders');
    }
};
