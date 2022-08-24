<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_alternatives', function (Blueprint $table) {
            $table->id();
            $table->string('alternative',50);
            $table->boolean('isCorrect');
            $table->text('explanation');
            $table->integer('idQuestion')->unsigned();
            $table->foreingId('idQuestion')->constrained()-onDelete('cascade');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_alternatives');
    }
};
