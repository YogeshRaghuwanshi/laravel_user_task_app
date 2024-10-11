<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Task;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMultipleSheets;

class UsersExport implements WithMultipleSheets
{
    public function sheets(): array
    {
        return [
            new UsersSheet(),
            new TasksSheet(),
        ];
    }
}

class UsersSheet implements FromCollection
{
    public function collection()
    {
        return User::all();
    }
}

class TasksSheet implements FromCollection
{
    public function collection()
    {
        return Task::with('user')->get();
    }
}