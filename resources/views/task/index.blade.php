<table>
    <thead>
        <tr>
            <th>S.No.</th>
            <th>Username</th>
            <th>User Email</th>
            <th>Task Detail</th>
            <th>Task Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($tasks as $index => $task)
            <tr>
                <td>{{ $index + 1 }}</td>
                <td>{{ $task->user->name }}</td>
                <td>{{ $task->user->email }}</td>
                <td>{{ $task->task_detail }}</td>
                <td>{{ $task->task_status }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
{{ $tasks->links() }}
