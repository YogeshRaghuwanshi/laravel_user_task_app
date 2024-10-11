<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Task;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport; 
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function create(){
      return view('user.create');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email',
            'mobile'=>'required',

        ]);

        User::create($request->all());
        return redirect()->route('users.index')->with('success', 'User created successfully.');;
    }

    public function index(){
        $users = User::paginate(5);
        return view('user.index',compact('users'));
    }

    public function export()
    {
        return Excel::download(new UsersExport, 'users_and_tasks.xlsx');
    }
    
}
