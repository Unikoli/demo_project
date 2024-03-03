<?php
namespace Modules\Professor\App\Repositories;

use Modules\Professor\App\Repositories\TaskRepositoryInterface;

use Modules\Professor\App\Models\Profess;

class TaskRepository implements TaskRepositoryInterface
{
    public function index(){
        $tasks=Profess::all();
        return $tasks;
    }
    public function create($id){
        $tasks=Profess::find($id);
        return $tasks;
    }
    public function store($object){
       $tasks= Profess::create($object);
       $tasks->save();
       return $tasks;

        //create method in laravel
    }
    public function edit($id){
        $tasks=Profess::find($id);
        return $tasks;
    }

    public function update($id, $attributes){
        $task = Profess::find($id);
        $task->update($attributes);
        return $task;
    }
    
    public function destroy($id){
       $tasks= Profess::find($id);
       $tasks->delete();
       return true;
        
    }
}
