
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('incoming_letters', function (Blueprint $table) {
            $table->renameColumn('tinggal', 'tanggal');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::table('incoming_letters', function (Blueprint $table) {
            $table->dropTimestamps();
            $table->renameColumn('tanggal', 'tinggal');
        });
    }
};
