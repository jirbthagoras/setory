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
        Schema::create('ratings', function (Blueprint $table) {
            $table->id();
            $table->enum("rate", [1, 2, 3, 4, 5])->nullable(false);
            $table->text("comment")->nullable(false);
            $table->unsignedBigInteger("user_id")->nullable(false);
            $table->unsignedBigInteger("subject_id")->nullable(false);

            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
            $table->foreign("subject_id")->references("id")->on("subjects")->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
