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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->nullable()->index();
            $table->string('user_id')->nullable()->index();
            $table->string('address_id')->nullable()->index();
            $table->string('order_no')->nullable()->index();
            $table->string('invoice_no')->nullable()->index();
            $table->string('party_order_no')->nullable()->index();
            $table->string('purchase_order_date')->nullable()->index();
            $table->string('total_amount')->nullable()->index();
            $table->string('total_amount_with_gst')->nullable()->index();
            $table->string('order_status')->nullable()->index();
            $table->longText('remark')->nullable()->index();
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
        Schema::dropIfExists('orders');
    }
};
