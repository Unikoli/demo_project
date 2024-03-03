<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Services\TaskService;
use App\Models\Task;

class TaskController extends Controller
{
    protected $taskService;
    public function __construct(TaskService $taskService)
    {
        
        $this->taskService = $taskService;
    }

    // public function __construct()
    // {
    //     $taskService=new TaskService;
    //     $this->taskService = $taskService;
    // }

    public function index()
    {
        $tasks = $this->taskService->getAllTasks();
        return view('index', compact('tasks'));
    }

    public function create()
    {
        return view('add-task');
    }

    public function store(request $request)
    {
       $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'status' => 'required|in:pending,completed'
            
        ]);
        $tasks = [
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'status' => $request->input('status')
        ];
        $this->taskService->createTask($tasks);
        return redirect('all-task');


        // $this->taskService->title=request('title');
        // $this->taskService->description=request('description');
        // $this->taskService->status=request('status');
        // $this->taskService->createTask($request->all());

        // return redirect('index');
            
    }

    public function edit(Task $task)
    {
        
        return view('edit-task',compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'nullable',
            'status' => 'required|in:pending,completed',
            'due_date' => 'nullable|date',
        ]);

        $tasks= [
            'title' =>$request->input('title'),
            'description' =>$request->input('description'),
            'status' =>$request->input('status'),

        ];
        $this->taskService->updateTask($task,$tasks);
        

        return redirect('edit-task');
    }

    public function destroy(Task $id)
    {
        $this->taskService->deleteTask($id);

        return redirect('all-task');
    }
}
