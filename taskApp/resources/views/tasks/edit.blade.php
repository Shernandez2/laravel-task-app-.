@extends('layouts.app')

@section('content')
    <div class="text-center mb-8">
        <h1 class="text-2xl font-bold mb-4">Edit Task</h1>
    </div>

    <div class="max-w-2xl mx-auto p-4">
        <form class="mb-2" action="{{ route('tasks.update', $task->id) }}" method="POST">
            @csrf
            @method('PUT') {{-- Important for updating (PUT/PATCH) --}}

            @csrf
                <div class="mb-4">
                    <label for="task_name" class="block mb-1">Task Name:</label>
                    <input type="text" name="task_name" id="task_name" class="w-full border rounded px-3 py-2" value="{{ old('task_name', $task->task_name)}}">
                    @error('task_name')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="task_location" class="block mb-1">Location:</label>
                    <input type="text" name="task_location" id="task_location" class="w-full border rounded px-3 py-2" value="{{ old('task_location', $task->task_location) }}">
                    @error('task_location')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="time_complexity" class="block mb-1">Time Complexity:</label>
                    <input type="number" name="time_complexity" id="time_complexity" class="w-full border rounded px-3 py-2" value="{{ old('time_complexity', $task->time_complexity) }}" min="1" max="5">
                    @error('time_complexity')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="materials_required" class="block mb-1">Materials Required:</label>
                    <input type="text" name="materials_required" id="materials_required" class="w-full border rounded px-3 py-2" value="{{ old('materials_required', $task->materials_required) }}">
                    @error('materials_required')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="deadline" class="block mb-1">Deadline:</label>
                    <input type="date" name="deadline" id="deadline" class="w-full border rounded px-3 py-2" value="{{ old('deadline', $task->deadline) }}">
                    @error('deadline')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="priority" class="block mb-1">Priority:</label>

                    @csrf
                    <input type="number" name="priority" id="priority" class="w-full border rounded px-3 py-2" value="{{ old('priority', $task->priority) }}" min="1" max="3">
                    @error('priority')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

                <div class="mb-4">
                    <label for="category" class="block mb-1">Category:</label>
                    <input type="text" name="category" id="category" class="w-full border rounded px-3 py-2" value="{{ old('category', $task->category) }}">
                    @error('category')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                </div>

            <div class="w-full text-center">
                <button type="submit" class="focus:outline-none text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium
            rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Update Task</button>
            </div>
        </form>

        <form class="text-center" action="{{ route('tasks.destroy', $task->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium
            rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">Delete Task</button>
        </form>
    </div>
@endsection