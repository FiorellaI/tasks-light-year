<?php

class TasksController extends BaseController {

	//Controlador de tareas

	public function getTasks()
    {
        $task = Task::all();
        return Response::json($task);
    }

    public function saveTask()
    {
        $taskName = Input::get('name');
        $taskDate = Input::get('due_date');

        $task = new Task();
        $task->name = $taskName;
        $task->due_date = $taskDate;
        $task->done = false;
        $task->save();

        return Response::json($task);
    }

}
