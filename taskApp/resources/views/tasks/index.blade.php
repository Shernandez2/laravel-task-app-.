@extends('layouts.app')

@section('content')
	<div class="flex flex-col justify-center items-center mt-8">
		<h1 class="text-2xl font-bold mb-4">All Tasks</h1>

		{{-- search and sort form --}}
		<form action="{{ route('tasks.index') }}" method="GET" class="mb-4">
			<!-- Search Field -->
			<input type="text" name="search" value="{{ request('search') }}" placeholder="Search tasks..." class="border border-gray-300 px-2 py-1 rounded">

			<select name="sort" class="border border-gray-300 px-2 py-1 rounded">
				<option value="task_name" {{ request('sort') === 'task_name' ? 'selected' : '' }}>Alphabetical</option>
				<option value="deadline" {{ request('sort') === 'deadline' ? 'selected' : '' }}>Deadline</option>
				<option value="category" {{ request('sort') === 'category' ? 'selected' : '' }}>Category</option>
			</select>

			<button type="submit" class="bg-blue-500 text-white px-4 py-2 ml-2 rounded hover:bg-blue-600">Search & Sort</button>
		</form>
	</div>

	<div class="flex flex-col mt-8 justify-center items-center">
		<ul>
			@forelse($tasks as $task)
				<li class="mb-6 flex flex-col justify-center items-center">
					{{ $task->task_name }}

					<a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 underline">View</a>
				</li>
			@empty
				<li>No tasks yet.</li>
			@endforelse
		</ul>

		<div class="mt-8">
			<a href="{{ route('tasks.create') }}" class="bg-gray-600 text-white px-4 py-2 rounded hover:bg-gray-700">Create a New Task</a>
		</div>
	</div>
@endsection