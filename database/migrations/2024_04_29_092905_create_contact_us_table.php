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
        Schema::create('contact_us', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable()->index();
            $table->string('c_name')->nullable()->index();
            $table->string('c_type')->nullable()->index();
            $table->string('name')->nullable()->index();
            $table->string('email')->nullable()->index();
            $table->string('contact')->nullable()->index();
            $table->string('job_title')->nullable()->index();
            $table->string('role_desc')->nullable()->index();
            $table->string('city')->nullable()->index();
            $table->string('state')->nullable()->index();
            $table->string('pin')->nullable()->index();
            $table->string('country')->nullable()->index();
            $table->longText('how_can_we_help')->nullable()->index();
            $table->longText('message')->nullable()->index();
            $table->boolean('status')->default(1)->comment('1 for active and 0 for deactive')->index();
            $table->longText('remark')->nullable()->index();
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
        Schema::dropIfExists('contact_us');
    }
};
