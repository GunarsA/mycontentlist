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
        Schema::create('content_types', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->timestamps();
        });

        Schema::table('contents', function (Blueprint $table) {
            $table->foreignId('content_type_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('contents', function (Blueprint $table) {
            $table->dropForeign(['content_type_id']);
        });

        Schema::dropIfExists('content_types');
    }
};
