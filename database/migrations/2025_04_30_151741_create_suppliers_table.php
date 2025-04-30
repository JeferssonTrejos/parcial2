<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('suppliers', function (Blueprint $table) {
            $table->id();
            $table->string('tax_identifier', 40);
            $table->string('commercial_name', 30);
            $table->text('contact_person');
            $table->string('address', 50);
            $table->string('email_address', 50);
            $table->string('payment_terms', 45);
            $table->string('average_replenishment_time', 45);
            $table->string('reliability_assessment', 10);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suppliers');
    }
};
