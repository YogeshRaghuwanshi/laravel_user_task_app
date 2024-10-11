<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Task;



class DashboardController extends Controller
{
    public function index()
    {
        $userCount = User::count();
        $taskCount = Task::count();
        $pendingTasks = Task::where('task_status', 'Pending')->count();
        $doneTasks = Task::where('task_status', 'Done')->count();
        
        return view('dashboard.index', compact('userCount', 'taskCount', 'pendingTasks', 'doneTasks'));
    }
}
