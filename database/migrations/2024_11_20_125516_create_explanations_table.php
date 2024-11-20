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
        Schema::create('explanations', function (Blueprint $table) {
            $table->id();
            $table->text("description")->nullable(false);
            $table->unsignedBigInteger("subject_id")->nullable(false);
            $table->unsignedBigInteger("image_id")->nullable(false);

            $table->foreign("subject_id")->references("id")->on("subjects")->onDelete("cascade");
            $table->foreign("image_id")->references("id")->on("images")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('explanations');
    }
};
