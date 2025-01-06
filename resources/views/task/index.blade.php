@extends('templates.default')

@section('content')
    <h1>{{ trans('task.heading') }}</h1>
    <!-- Bootstrap Boilerplate... -->
    <div class="panel-body">
        <a href="{{route('task.create')}}"><i class="fa fa-plus"></i>{{trans('task.all.create_btn')}}</a>
    </div>
        <div class="panel panel-default">
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <tr>
                            <th>Task</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($tasks) > 0)
                            @foreach ($tasks as $task)
                                <tr>
                                    <!-- Task Name -->
                                    <td class="table-text">
                                        <div>{{ $task->name }}</div>
                                    </td>
                                    <td>
                                        <form action="{{route('task.destroy', $task->id)}}" method="post">
                                            {{csrf_field()}}
                                            {{method_field('DELETE')}}
                                            <input type="submit" value="delete" class="btn btn-danger">
                                        </form>
                                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-warning">Edit</a>
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
@endsection