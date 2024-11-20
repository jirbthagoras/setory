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
        Schema::create('options', function (Blueprint $table) {
            $table->id();
            $table->enum("name", ['A', 'B', 'C', 'D'])->nullable(false);
            $table->string("description")->nullable(false);
            $table->boolean("is_right")->nullable(false)->default(false);
            $table->unsignedBigInteger("question_id")->nullable(false);

            $table->foreign("question_id")->references("id")->on("questions")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('options');
    }
};
