<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTasksTable extends Migration {


	public function up()
	{
        Schema::create('tasks', function($table){

            //autoincremento - clave primaria
            $table->increments('id');

            //columns
            $table->string('name', 100);
            $table->string('due_date');
            $table->boolean('done');

            //timestamp
            $table->timestamps();

        });

	}

	public function down()
	{
		Schema::drop('tasks');
	}

}
