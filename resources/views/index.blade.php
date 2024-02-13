@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tasks</h2>
        <a href="{{url('')}}" class="btn btn-primary">Create Task</a>
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
               

                
                    <tr>
                        <td>hey</td>
                        <td>help</td>
                        <td>help</td>
                        <td>
                            <a href="{{ url('')}}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ url('')}}" method="POST" style="display: inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                
            </tbody>
        </table>
    </div>
@endsection
