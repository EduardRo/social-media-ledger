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
        Schema::create('fund_administrators', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('country');
            $table->string('city');
            $table->text('address');
            $table->string('contact_person');
            $table->string('phone');
            $table->string('email');
            $table->string('administrator_name');
            $table->string('administrator_surname');
            $table->string('administrator_phone');
            $table->string('administrator_email');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fund_administrators');
    }
};
