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
            $table->string('name')->nullable()->index();
            $table->longText('title')->nullable();
            $table->longText('description')->nullable();
            $table->boolean('is_varient_required')->default(0)->nullable()->index();
            $table->bigInteger('category_id')->nullable()->index();
            $table->bigInteger('subcategory_id')->nullable()->index();
            $table->bigInteger('supsubcategory_id')->nullable()->index();
            
            $table->string('product_code')->nullable()->index();
            $table->string('specification')->nullable()->index();
            $table->longText('dimention')->nullable()->index();
            $table->string('pack_of')->default(1)->nullable()->index();
            $table->string('material')->nullable()->index();
            $table->string('make_in')->nullable()->index();

            $table->bigInteger('price')->nullable()->index();
            $table->bigInteger('mrp')->nullable()->index();
            
            $table->longText('varient_type')->nullable();
            $table->json('varient_value')->nullable();
            $table->json('varient_detail')->nullable();

            $table->json('thumbnail')->nullable();

            $table->boolean('status')->default(1)->comment('1 for Active and 0 for Blocked')->index();
            $table->boolean('stock')->default(1)->comment('1 for in stock and 0 for out of stock')->index();
            $table->json('tags')->nullable()->index();
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
