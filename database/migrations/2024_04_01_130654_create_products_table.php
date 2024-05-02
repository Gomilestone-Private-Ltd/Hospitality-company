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
            $table->longText('name')->nullable()->index();
            $table->longText('description')->nullable();
            $table->bigInteger('category_id')->nullable()->index();
            $table->bigInteger('subCategory_id')->nullable()->index();
            $table->bigInteger('sup_subCategory_id')->nullable()->index();
            
            $table->json('gen_image')->nullable();
            $table->string('hsn_code')->nullable()->index();

            $table->json('color')->nullable()->index();
            $table->json('color_varient')->nullable()->index();
            $table->json('color_varient_images')->nullable()->index();
            $table->string('specification')->nullable()->index();
            $table->bigInteger('moq')->nullable()->index();
            $table->json('material')->nullable()->index();
            $table->json('size')->nullable()->index();
            $table->json('size_varient')->nullable()->index();
            $table->bigInteger('gen_price')->nullable()->index();
            $table->integer('gen_gst')->nullable()->index();
            $table->integer('gen_stock')->nullable()->index();
            
            $table->string('make_in')->nullable()->index();
            $table->boolean('status')->default(1)->comment('1 for Active and 0 for Blocked')->index();
            $table->json('tags')->nullable()->index();
            $table->json('meta_tags')->nullable()->index();
            $table->boolean('is_varient_available')->default(0)->nullable()->index();
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
