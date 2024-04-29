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
        Schema::create('work_with_us', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable()->index();
            $table->string('name')->nullable()->index();
            $table->string('email')->nullable()->index();
            $table->string('message')->nullable()->index();
            $table->string('file')->nullable()->index();
            $table->string('size')->nullable()->index();
            $table->string('extention')->nullable()->index();
            $table->string('original_file')->nullable()->index();
            $table->longText('remark')->nullable()->index();
            $table->boolean('status')->default(1)->comment('1 for active and 0 for deactive')->index();
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
        Schema::dropIfExists('work_with_us');
    }
};
