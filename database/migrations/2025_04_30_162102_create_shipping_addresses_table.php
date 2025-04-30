<?php

use App\Models\Customers;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shipping_addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customers::class)->constrained();
            $table->string('addressee', 45);
            $table->string('floor', 15);
            $table->string('postal_code', 10);
            $table->string('city', 30);
            $table->string('region', 30);
            $table->string('country', 30);
            $table->string('phone_number', 20);
            $table->text('special_instructions');
            $table->string('payment_methods', 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shipping_addresses');
    }
};
