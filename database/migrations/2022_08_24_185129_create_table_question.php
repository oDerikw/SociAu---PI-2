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
        Schema::create('table_question', function (Blueprint $table) {
            $table->id();
            $table->text('Question');
            $table->varchar('imagem');
            $table->string('Category',50);
            $table->interger('Admin_id')->unsigned();
            //criar a relaçaõ
            //$table->foreing('Admin_id')->references('id')->on('Admin'))->onDelete('cascade');
            $table->foreingId('Admin_id')->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('table_question');
    }
};
