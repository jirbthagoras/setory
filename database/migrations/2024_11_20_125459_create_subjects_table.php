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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string("name", 100)->nullable(false);
            $table->string("location", 100)->nullable(false);
            $table->text("description")->nullable(false);
            $table->enum("category", ['building', 'culinary'])->nullable(false);
            $table->string("video");
            $table->unsignedBigInteger("image_id")->nullable();

            $table->foreign("image_id")->references("id")->on("images")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
