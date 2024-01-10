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
        Schema::create('addresses', function (Blueprint $table) {
            
            $table->id();
            $table->string('province',45);
            $table->string('municipality',45)->nullable();
            $table->string('street',45);
            $table->integer('number');
            $table->integer('flat')->nullable();
            $table->string('letter');
            $table->timestamps();
            $table->unsignedBigInteger('user_id')->unique()->nullable();

            $table->foreign('user_id')
            ->references('id')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
        });




        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
