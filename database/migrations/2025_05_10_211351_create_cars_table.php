<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');     // اسم السيارة
            $table->string('brand');    // نوع الشركة المصنعة
            $table->decimal('price', 10, 2); // السعر
            $table->timestamps();       // created_at و updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
