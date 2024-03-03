<?php

namespace Modules\Professor\App\Services;

use Modules\Professor\App\Repositories\TaskRepository;

class TaskService {
    protected $taskRepository;

    public function __construct(TaskRepository $taskRepository){
        $this->taskRepository = $taskRepository;
    }

    public function getAllTasks(){
        return $this->taskRepository->index();
    }

    public function createTask($id){
        return $this->taskRepository->create($id);
    }

    public function storeTask($object){
        return $this->taskRepository->store($object);
    }

    public function updateTask($id, $data){
        return $this->taskRepository->update($id, $data);
    }

    public function deleteTask($id){
        return $this->taskRepository->destroy($id);
    }
}
