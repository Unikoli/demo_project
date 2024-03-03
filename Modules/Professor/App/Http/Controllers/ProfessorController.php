<?php

namespace Modules\Professor\App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Modules\Professor\App\Services\TaskService;

class ProfessorController extends Controller
{
    protected $taskService;

    public function __construct(TaskService $taskService)
    {
        $this->taskService = $taskService;
    }

    public function index()
    {
        $tasks = $this->taskService->getAllTasks();
        return view('professor::all-task', compact('tasks'));
    }

    public function create()
    {
        return view('professor::add-task');
    }

    public function store(Request $request)
    {
        // Assuming $request->all() contains the necessary data for creating a task
        $task = $this->taskService->storeTask($request->all());
        return redirect('all-task');
    }

    public function show($id)
    {
        return view('professor::edit-blade');
    }

    public function update(Request $request, $id)
    {
        // Assuming $request->all() contains the necessary data for updating a task
        $this->taskService->updateTask($id, $request->all());
        return redirect('all-task');
    }

    public function destroy($id)
    {
        $this->taskService->deleteTask($id);
        return redirect('all-task');
    }
}
