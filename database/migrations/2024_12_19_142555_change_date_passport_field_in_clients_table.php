<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Сначала удаляем все записи с датой '0000-00-00'
        DB::table('clients')->where('date_passport', '0000-00-00')->update(['date_passport' => '1900-01-01']);

        Schema::table('clients', function (Blueprint $table) {
            $table->date('date_passport')->nullable(true)->change();
        });

        DB::table('clients')->where('date_passport', '1900-01-01')->update(['date_passport' => null]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('clients', function (Blueprint $table) {
            $table->date('date_passport')->nullable(false)->change();
        });
    }
};
