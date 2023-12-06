<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('boissons', function (Blueprint $table) {
            $table->string('images')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('boissons', function (Blueprint $table) {
            $table->dropColumn('images');
        });
    }
    
};
