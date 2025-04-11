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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->integer('category_id');
            $table->integer('subcategory_id');
            $table->integer('instructor_id');
            $table->string('course_image')->nullable();
            $table->text('course_title')->nullable();
            $table->text('course_name')->nullable();
            $table->string('course_name_slug')->nullable();

            $table->longText('description')->nullable();
            $table->string('video_url')->nullable();
            $table->string('label')->nullable();

            $table->string('resources')->nullable();
            $table->string('certificate')->nullable();

            $table->decimal('duration', 8, 2)->nullable();


            $table->integer('selling_price')->nullable();
            $table->integer('discount_price')->nullable();
            $table->text('prerequisites')->nullable();
            $table->string('bestseller')->nullable();
            $table->string('featured')->nullable();
            $table->string('highestrated')->nullable();
            $table->tinyInteger('status')->default(0)->comment('0=Inactive','1=Active');
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
