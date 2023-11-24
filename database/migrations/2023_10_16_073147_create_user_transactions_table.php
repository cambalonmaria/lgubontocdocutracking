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
        Schema::create('user_transactions', function (Blueprint $table) {
               $table->id();
               $table->string('transaction_code');
               $table->string('fullname');
               $table->string('contact_number');
               $table->string('email_address')->unique();
               $table->string('title');
               $table->string('address');
               $table->string('destination');
               $table->text('purpose');
               $table->text('short_description');
               $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_transaction');
    }
};
