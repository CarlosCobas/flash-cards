<?php

use App\Models\Card;
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
        Schema::create('study_progress', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Card::class);
            $table->integer('interval');
            $table->float('e_factor');
            $table->date('next_date_to_show');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_progress');
    }
};
