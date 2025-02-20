<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Task;
use App\Models\User;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::all();
        if ($users->isEmpty()) {
            $users = User::factory(5)->create(); 
        }

        foreach ($users as $user) {
            Task::factory(3)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
