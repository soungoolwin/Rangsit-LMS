<?php

use App\Models\Category;
use App\Models\Subcategory;
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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('course_name');
            $table->enum('visibility', ['public', 'private'])->default('private');
            $table->foreignIdFor(Category::class)->nullable()->constrained();
            $table->foreignIdFor(Subcategory::class)->nullable()->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
