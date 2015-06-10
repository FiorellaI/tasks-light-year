<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('tasks');
});

Route::post('/tasks', function()
{
    $taskName = Input::get('name');
    $taskDate = Input::get('due_date');

    $task = new Task();
    $task->name = $taskName;
    $task->due_date = $taskDate;
    $task->done = false;
    $task->save();

    return Response::json($task);

 });
