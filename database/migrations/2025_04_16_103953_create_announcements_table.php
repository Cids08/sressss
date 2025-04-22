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
        // Create announcement categories table
        Schema::create('announcement_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Create announcements table
        Schema::create('announcements', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('announcement_categories')->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->text('details')->nullable();
            $table->enum('importance', ['high', 'medium', 'low'])->default('medium');
            $table->dateTime('posted_at');
            $table->dateTime('expires_at')->nullable();
            $table->boolean('is_published')->default(true);
            $table->integer('view_count')->default(0);
            $table->string('created_by')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('announcements');
        Schema::dropIfExists('announcement_categories');
    }
};