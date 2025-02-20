@extends('layouts.app')

@section('content')
    <div class="max-w-2xl mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4">Create New Task</h1>

        <form action="" method="POST" class="grid grid-cols-2 gap-4" >

            @csrf

            {{-- Task Name --}}
            <div class="mb-4 border-2 border-blue-600">
                <label for="task_name">Task Name</label>
                <input type="text" name="task_name" id="task_name" placeholder="Take out trash, do dishes, etc..." required>
            </div>

            {{-- Task Location --}}
            <div class="mb-4">
                <label for="task_location">Location</label>
                <input type="text" name="task_location" id="task_location" placeholder="Kitchen, Bathroom, etc...">
            </div>

            {{-- Time Estimate (or Time Complexity) --}}
            <div class="mb-4">
                <label for="time_complexity">Time Estimate</label>
                <select name="time_complexity" id="time_complexity">
                    <option value="1">10 Minutes</option>
                    <option value="2">30 Minutes</option>
                    <option value="3">1 Hour</option>
                    <option value="4">1 Hour and 30 Minutes</option>
                    <option value="5">2 Hours</option>
                </select>
            </div>

            {{-- Materials Required (Optional) --}}
            <div class="mb-4">
                <label for="materials_required">Materials Required</label>
                <input type="text" name="materials_required" id="materials_required" placeholder="Broom, Mop, etc...">
            </div>

            {{-- Deadline (Optional) --}}
            <div class="mb-4">
                <label for="deadline">Deadline</label>
                <input type="datetime-local" name="deadline" id="deadline">
            </div>

            {{-- Priority (Optional) --}}
            <div class="mb-4">
                <label for="priority">Priority</label>
                <select name="priority" id="priority">
                    <option value="1">Low (1)</option>
                    <option value="2">Medium (2)</option>
                    <option value="3">High (3)</option>
                </select>
            </div>

            {{-- Category (Optional) --}}
            <div class="mb-4">
                <label for="category">Category</label>
                <input type="text" name="category" id="category" placeholder="Chores, work, etc...">
            </div>

            {{-- Submit and Cancel Buttons --}}
            <div class="flex gap-4">
                <button type="submit">Create Task</button>
                <a href="/">Back to Tasks</a>
            </div>
        </form>
    </div>
@endsection('content')