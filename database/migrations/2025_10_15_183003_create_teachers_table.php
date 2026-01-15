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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('subject_teacher', function (Blueprint $table) {
            $table->foreignIdFor(App\Models\Teacher::class)->constrained()->onDelete('cascade');  // teacher_id
            $table->foreignIdFor(App\Models\Subject::class)->constrained()->onDelete('cascade'); // subject_id
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
