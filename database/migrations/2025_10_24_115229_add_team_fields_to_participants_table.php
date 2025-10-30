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
        Schema::table('participant', function (Blueprint $table) {
            $table->string('team_name')->nullable()->after('email');
            $table->uuid('registration_group_id')->nullable()->after('team_name');
            $table->boolean('is_team_leader')->default(false)->after('registration_group_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('participant', function (Blueprint $table) {
             $table->dropColumn(['team_name', 'registration_group_id', 'is_team_leader']);
        });
    }
};
