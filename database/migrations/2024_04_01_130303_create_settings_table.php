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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable()->index();
            $table->string('app_name')->nullable()->index();
            $table->string('email')->nullable()->index();
            $table->string('contact')->nullable()->index();
            $table->longText('address')->nullable();
            $table->string('logo')->nullable()->index();
            $table->string('favicon')->nullable()->index();
            $table->string('ip')->nullable()->index();
            $table->bigInteger('added_by')->nullable()->index();
            $table->bigInteger('updated_by')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
