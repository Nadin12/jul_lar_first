<!-- resources/views/tasks.blade.php -->

@extends('templates.default')

@section('content')
    <h1>Update task</h1>
    <!-- Bootstrap Boilerplate... -->

    <div class="panel-body">
        <!-- Display Validation Errors -->
        @include('common.errors')
        <!-- New Task Form -->
        <form action="{{ route('task.update', $task->id) }}" method="post" class="form-horizontal">
        {{ csrf_field() }}
            {{method_field('PUT')}}
            <!-- Task Name -->
            <div class="form-group">
                <label for="task" class="col-sm-3 control-label">Task</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $task->name) }}">
                </div>
            </div>

            <!-- Update Task Button -->
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Update Task
                    </button>
                </div>
            </div>
        </form>
    </div>

@endsection