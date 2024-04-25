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
        Schema::create('varient_values', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable()->index();
            $table->string('varient_type_id')->nullable()->index();
            $table->string('varient_value_label')->nullable()->index();
            $table->string('varient_value')->nullable()->index();
            $table->boolean('status')->default(1)->comment('1 for Active and 0 for Blocked')->index();
            $table->bigInteger('added_by')->nullable()->index();
            $table->bigInteger('updated_by')->nullable()->index();
            $table->bigInteger('deleted_by')->nullable()->index();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('varient_values');
    }
};
