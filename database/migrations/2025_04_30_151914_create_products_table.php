<?php

use App\Models\ProductCategories;
use App\Models\Suppliers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('SKU', 50);

            $table->foreignIdFor(ProductCategories::class)->constrained();
            $table->foreignIdFor(Suppliers::class)->constrained();

            $table->string('name', 50);
            $table->text('description');
            $table->text('technical_specifications');
            $table->string('brand', 25);
            $table->decimal('base_price', 8, 2);
            $table->text('applicable_taxes');
            $table->text('active_descounts');
            $table->dateTime('estimated_shipping_time');
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
