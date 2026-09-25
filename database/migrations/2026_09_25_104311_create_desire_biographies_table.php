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
        Schema::create('desire_biographies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('participation_period_id')
             ->unique()
             ->constrained()
             ->cascadeOnDelete();

            $table->text('body')->nullable();
            $table->timestamp('submitted_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('desire_biographies');
    }
};
