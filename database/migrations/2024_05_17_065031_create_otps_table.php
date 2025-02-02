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
        Schema::create('otps', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable()->index();
            $table->string('contact')->nullable()->index();
            $table->string('fullname')->nullable()->index();
            $table->string('otp')->nullable()->index();
            $table->boolean('status')->default('1')->comment('1 for active and 0 for in active')->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('otps');
    }
};
