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
        Schema::create('info_lokers', function (Blueprint $table) {
            $table->id();
            $table->string('city');
            $table->string('province')->nullable();
            $table->string('position');
            $table->integer('count')->default(0);
            $table->boolean('is_active')->default(true);
            $table->date('expiry_date')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
            $table->index(['city', 'position']);
            $table->index('is_active');
            $table->index('expiry_date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_lokers');
    }
};
