<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the Migration
     */
    public function up(): void
    {
        Schema::create('StudentList', function (Blueprint $table): void {
            $table->id();
            $table->string('name');
            $table->string('age');
            $table->string('degree');
        });
    }
    /**
     * Reverse the Migration
     */
    public function down(): void
    {
        Schema::dropIfExists('StudentList');
    }
};
