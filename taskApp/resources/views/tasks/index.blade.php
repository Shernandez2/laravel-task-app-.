@extends('layouts.app')

@section('content')
	<div class="flex flex-col items-center justify-center mb-6">
		<h1 class="text-2xl font-bold mb-4">All Tasks</h1>

    	{{-- search and sort form --}}
    	<form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
    	    <input type="text" name="search" value="{{ request('search') }}" placeholder="Search tasks..." class="border border-gray-300 px-2 py-1 rounded">
    	    <select name="sort" class="border border-gray-300 px-2 py-1 rounded">
    	        <option value="task_name" {{ request('sort') === 'task_name' ? 'selected' : '' }}>Alphabetical</option>
    	        <option value="deadline" {{ request('sort') === 'deadline' ? 'selected' : '' }}>Deadline</option>
    	        <option value="category" {{ request('sort') === 'category' ? 'selected' : '' }}>Category</option>
    	    </select>
    	    <button type="submit" class="bg-green-700 text-white px-4 py-2 ml-2 rounded hover:bg-green-800">Search & Sort</button>
    	</form>
	</div>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">Task Name</th>
                    <th scope="col" class="px-6 py-3">Deadline</th>
                    <th scope="col" class="px-6 py-3">Priority</th>
                    <th scope="col" class="px-6 py-3">Category</th>
					<th scope="col" class="px-6 py-3">Edit/View</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            {{ $task->task_name }}
                        </td>
                        <td class="px-6 py-4">{{ $task->deadline }}</td>
                        <td class="px-6 py-4">{{ $task->priority }}</td>
                        <td class="px-6 py-4">{{ $task->category }}</td>
					  <td class="px-6 py-4"><a href="{{ route('tasks.show', $task->id) }}" class="text-green-700 underline">View</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        <a href="{{ route('tasks.create') }}" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800">Create a New Task</a>
    </div>
@endsection
