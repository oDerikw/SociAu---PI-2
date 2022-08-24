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
            $table->text('question');
            $table->varchar('image');
            $table->string('category',50);
            $table->integer('admin_id')->unsigned();
            $table->foreingId('admin_id')->constrained()->onDelete('cascade');
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
