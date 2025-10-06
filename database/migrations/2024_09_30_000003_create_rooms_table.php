<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained()->onDelete('cascade');
            $table->string('room_type');
            $table->text('description');
            $table->integer('max_occupancy');
            $table->integer('quantity_available');
            $table->decimal('price_per_night', 10, 2);
            $table->json('amenities')->nullable();
            $table->json('images')->nullable();
            $table->integer('size')->nullable()->comment('Room size in square meters');
            $table->string('bed_type');
            $table->boolean('is_smoking_allowed')->default(false);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('rooms');
    }
};
