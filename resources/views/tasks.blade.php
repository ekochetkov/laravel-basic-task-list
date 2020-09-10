@extends('layouts.app')

@section('content')

    <!-- Bootstrap Boilerplate... -->

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">New Task</h5>

            <!-- Display Validation Errors -->
            @include('common.errors')

            <!-- New Task Form -->
            <form action="/task" method="POST" class="form-horizontal">
                {{ csrf_field() }}

                <!-- Task Name -->
                <div class="form-group">
                    <label for="task" class="col-sm-3 control-label">Task</label>

                    <div class="col-sm-6">
                        <input type="text" name="name" id="task-name" class="form-control">
                    </div>
                </div>

                <!-- Add Task Button -->
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-plus"></i> Add Task
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>

<!-- TODO: Current Tasks -->
@if (count($tasks) > 0)
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Current Tasks</h5>
            <!--<h6 class="card-subtitle mb-2 text-muted">Panel subtitle</h6>-->
            <table class="table table-striped">

                <!-- Table Headings 
                <thead>
                    <th>Task</th>
                    <th>&nbsp;</th>
                </thead>
                -->

                <!-- Table Body -->
                <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <tr>
                                <!-- Task Name -->
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>

                                <!-- Delete Button -->
                                <td>
                                    <form action="/task/{{ $task->id }}" method="POST">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}

                                        <button  type="submit" class="btn btn-danger">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>

                                    </form>
                                </td>
                            </tr>
                        </tr>
                    @endforeach
                </tbody>
                </table>
        </div>
    </div>
@endif
    
@endsection