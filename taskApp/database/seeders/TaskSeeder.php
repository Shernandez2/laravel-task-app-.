<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
		    'task_name' => 'Wash dishes',
		    'task_location' => 'Kitchen',
		    'time_complexity' => 2,
		    'materials_required' => 'Sponge or wash cloth, soap',
		    'deadline' => '2025-02-20 10:00:00',
		    'priority' => 3,
		    'category' => 'chores'
	    ]);

		Task::create([
		    'task_name' => 'Water flowers',
		    'task_location' => 'Garden',
		    'time_complexity' => 1,
		    'materials_required' => 'Watering Can, water',
		    'deadline' => '2025-02-20 10:00:00',
		    'priority' => 1,
		    'category' => 'gardening'
	    ]);

		Task::create([
		    'task_name' => 'Slide on the opps',
		    'task_location' => 'The Opps Location',
		    'time_complexity' => 2,
		    'materials_required' => 'G45 with a switch',
		    'deadline' => '2025-02-20 10:00:00',
		    'priority' => 3,
		    'category' => 'business'
	    ]);

		Task::create([
		    'task_name' => 'Feed cats',
		    'task_location' => 'Kitchen',
		    'time_complexity' => 1,
		    'materials_required' => 'CAT FOOD',
		    'deadline' => '2025-02-20 10:00:00',
		    'priority' => 2,
		    'category' => 'chores'
	    ]);

		Task::create([
		    'task_name' => 'Play Fortnite',
		    'task_location' => 'The Man Cave',
		    'time_complexity' => 4,
		    'materials_required' => 'A quantum computer',
		    'deadline' => '2025-02-20 10:00:00',
		    'priority' => 3,
		    'category' => 'entertainment'
	    ]);
    }
}
