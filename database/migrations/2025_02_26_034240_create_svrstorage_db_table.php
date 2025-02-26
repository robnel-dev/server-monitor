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
        Schema::create('svrstorage_db', function (Blueprint $table) {
            $table->id();
            $table->string('svrip');         // Server IP
            $table->string('server_name');  // Server Name
            $table->string('drvletter');    // Drive Letter (C, D, etc.)
            $table->integer('drvsizetotal'); // Total Disk Size
            $table->string('drvsize_free');  // Free Space (e.g., "100GB")
            $table->date('datecrt');        // Date Created
            $table->time('timecrt');        // Time Created
            $table->boolean('svrstat')->default(1); // Status (1 = active)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('svrstorage_db');
    }
};
