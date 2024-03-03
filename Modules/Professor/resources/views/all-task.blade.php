@extends('professor::layouts.app')

@section('content')
    <div class="container">
        <h2>Tasks</h2>
        <a href="{{url('add-task')}}" class="btn btn-primary">Create Task</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            
                            @foreach($tasks as $task)
                            <tr>
                                <td>{{$task->title}}</td>
                                 <td>{{$task->description}}</td>
                                  <td>{{$task->status}}</td>                               
                                   <td>
										<a class="btn btn-sm btn-primary" href="{{url('edit-task/'.$task->id)}}">edit</a>
										<a  class="btn btn-sm btn-danger" href="{{url('delete-task/'.$task->id)}}">delete</a>													
									</td>

                                </tr>
                            @endforeach
                            </form>
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>
@endsection
