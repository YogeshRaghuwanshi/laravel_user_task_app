<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Task;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport; 
use Illuminate\Http\Request;

class Taskcontroller extends Controller
{
    public function create(){
        $users = User::all();
        return view('task.create',compact('users'));
    }

    public function store(Request $request) {
        $request->validate([
            'user_id' => 'required',
            'task_detail' => 'required',
            'task_status' => 'required',
        ]);
    
        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success', 'Task added successfully!');
    }

    public function index() {
        $tasks = Task::with('user')->paginate(5);
        return view('task.index', compact('tasks'));
    }

   
}
