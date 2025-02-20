<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
	    Task::create([
		    'task_name' => 'Take out trash',
		    'task_location' => 'Kitchen',
		    'time_complexity' => 1,
		    'materials_required' => 'Trash bags',
		    'deadline' => '2025-02-20 10:00:00',
		    'priority' => 2,
		    'category' => 'chores'
	    ]);
    }
}
