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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable()->index();
            $table->bigInteger('category_id')->nullable()->index();
            $table->bigInteger('subcategory_id')->nullable()->index();
            $table->bigInteger('supsubcategory_id')->nullable()->index();
            $table->string('name')->nullable()->index();
            $table->string('title')->nullable()->index();
            $table->longText('description')->nullable();
            $table->longText('dimention')->nullable()->index();
            $table->string('material')->nullable()->index();
            $table->string('make_in')->nullable()->index();
            $table->longText('varient_type')->nullable();
            $table->longText('varient_value')->nullable();
            $table->bigInteger('price')->nullable()->index();
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
        Schema::dropIfExists('products');
    }
};
