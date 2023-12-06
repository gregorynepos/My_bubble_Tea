
<?php
// database/migrations/create_boissons_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoissonsTable extends Migration
{
    public function up()
    {
        Schema::create('boissons', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->text('ingredients');
            $table->string('categorie');
            $table->decimal('prix', 8, 2);
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('boissons');
    }
}
