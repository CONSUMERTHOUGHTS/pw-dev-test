<?php
declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->primary(); // Primary key as UUID
            $table->string('product_name')->index(); // Indexed for faster lookups
            $table->string('parent_category')->index(); // Indexed for faster lookups
            $table->text('description');
            $table->boolean('on_sale')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void {
        Schema::dropIfExists('products');
    }
};
