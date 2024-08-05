<?php

use App\Models\Competition;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    private const TEAMS_TABLE = 'teams';
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('games', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->datetime('start');
            $table->text('description')->nullable();
            $table->text('summary')->nullable();
            $table->foreignIdFor(Competition::class)->constrained();
            $table->foreignIdFor(\App\Models\Team::class, 'team_1_id')->constrained(self::TEAMS_TABLE);
            $table->foreignIdFor(\App\Models\Team::class, 'team_2_id')->constrained(self::TEAMS_TABLE);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
