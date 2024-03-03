<?php

namespace App\Services;

use App\Models\Task;


class TaskService
{
    protected $taskModel;

    public function __construct(Task $taskModel)
    {
        $this->taskModel = $taskModel;
    }

    public function getAllTasks()
    {
        return $this->taskModel->all();
    }

    public function createTask(array $data)
    {
        return $this->taskModel->create($data);
    }

    public function updateTask(Task $task, array $data)
    {
        $task->update($data);
        return $task;
    }

    public function deleteTask(Task $task)
    {
        $task->delete();
    }
}

