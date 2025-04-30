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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Customers::class)->constrained();
            $table->date('date');
            $table->text('shipping_address');
            $table->text('billing_address');
            $table->string('payment_method', 20);
            $table->decimal('unit_price', 8, 2);
            $table->string('discounts', 20);
            $table->decimal('shipping_costs', 8, 2);
            $table->text('taxes');
            $table->decimal('total_paid', 8, 2);
            $table->enum('order_status', [
                'pendiente de pago',
                'pagado',
                'en preparación',
                'enviado',
                'entregado',
                'devuelto'
            ]);
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
