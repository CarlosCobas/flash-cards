<?php

use App\Models\Card;
use App\Models\StudySession;
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
        Schema::create('study_session_records', function (Blueprint $table) {
            $table->id();
            $table->integer('response')->nullable();
            $table->date('response_date')->nullable();
            $table->float('e_factor');
            $table->integer('interval');
            $table->foreignIdFor(Card::class);
            $table->foreignIdFor(StudySession::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('study_session_records');
    }
};
