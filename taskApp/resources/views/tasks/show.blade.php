@extends('layouts.app')

@section('content')
    <div class="min-w-full flex flex-col items-center justify-center">
        <h1 class="text-2xl font-bold mb-4">Task Details</h1>

        <div>
            <strong>Task Name:</strong> {{ $task->task_name }}
        </div>

        <div>
            <strong>Location:</strong> {{ $task->task_location }}
        </div>

        <div>
            <strong>Time Complexity:</strong> {{ $task->time_complexity }}
        </div>

        <div>
            <strong>Materials Required:</strong> {{ $task->materials_required }}
        </div>

        <div>
            <strong>Deadline:</strong> {{ $task->deadline }}
        </div>

        <div>
            <strong>Priority:</strong> {{ $task->priority }}
        </div>

        <div>
            <strong>Category:</strong> {{ $task->category }}
        </div>

        <div style="margin-top:20px;">
            <a href="{{ route('tasks.edit', $task->id) }}"
            class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium
            rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Edit Task</a>
            <a href="{{ route('tasks.index') }}" class="text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Back to List</a>
        </div>
    </div>
@endsection