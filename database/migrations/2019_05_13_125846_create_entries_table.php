<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
			$table->string('title', 191);//заголовок новости
			$table->text('content');//основной текст новости
			$table->bigInteger('user_id')
				  ->unsigned();//внещний ключ автора
			$table->foreign('user_id')
				  ->references('id')
				  ->on('users')
				  ->onDelete('CASCADE')
				  ->onUpdate('RESTRICT');
			
			
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entries');
    }
}
