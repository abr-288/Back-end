<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('room_availability', function (Blueprint $table) {
            $table->id();
            $table->foreignId('room_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->integer('available_rooms');
            $table->decimal('price', 10, 2)->nullable();
            $table->timestamps();
            
            $table->unique(['room_id', 'date']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('room_availability');
    }
};
