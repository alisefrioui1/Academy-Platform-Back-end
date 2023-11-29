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
        Schema::create('content_plan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('content_id')->unsigned();
            $table->unsignedBigInteger('plan_id')->unsigned();

            $table->foreign('content_id')->references('id')
                 ->on('contents')->onDelete('cascade');
            $table->foreign('plan_id')->references('id')
                ->on('plans')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('content_plan');
    }
};
