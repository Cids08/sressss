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
        // Create news categories table
        Schema::create('news_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('description')->nullable();
            $table->string('color_class')->nullable(); // CSS class for color-coding (indicator-event, indicator-academic, etc.)
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        // Create news table
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id')->constrained('news_categories')->onDelete('cascade');
            $table->string('title');
            $table->text('content');
            $table->text('details')->nullable();
            $table->string('image')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->dateTime('event_date')->nullable(); // For news that are events
            $table->string('event_location')->nullable();
            $table->dateTime('posted_at');
            $table->dateTime('expires_at')->nullable();
            $table->boolean('is_published')->default(true);
            $table->integer('view_count')->default(0);
            $table->string('created_by')->nullable();
            $table->timestamps();
        });

        // Create a table for additional event details
        Schema::create('news_event_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_id')->constrained()->onDelete('cascade');
            $table->string('detail_type'); // Could be 'highlight', 'venue', 'dress_code', etc.
            $table->string('detail_key')->nullable();
            $table->text('detail_value');
            $table->integer('display_order')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_event_details');
        Schema::dropIfExists('news');
        Schema::dropIfExists('news_categories');
    }
};