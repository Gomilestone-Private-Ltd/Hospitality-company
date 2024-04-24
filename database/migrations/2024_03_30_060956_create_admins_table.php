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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable()->index();
            $table->string('role')->nullable()->index();
            $table->string('name')->nullable()->index();
            $table->string('email')->nullable()->index();
            $table->string('contact')->nullable()->index();
            $table->string('password')->nullable()->index();
            $table->string('c_password')->nullable()->index();
            $table->boolean('status')->default(1)->comment('1 for Active and 0 for Blocked')->index();
            $table->string('avtar')->nullable()->index();
            $table->longText('address')->nullable();
            $table->bigInteger('added_by')->nullable()->index();
            $table->bigInteger('updated_by')->nullable()->index();
            $table->bigInteger('deleted_by')->nullable()->index();
            $table->softDeletes();
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
