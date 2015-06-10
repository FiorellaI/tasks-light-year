<?php

use Illuminate\Auth\UserTrait;
use Illuminate\Auth\Reminders\RemindableTrait;


class Task extends Eloquent {

	//Nombre de la tabla
	protected $table = 'tasks';


    //Atributos
	protected $filllabel = ['name', 'due_date', 'done'];


    //TimeStamps
    public $timestamps = true;

}
