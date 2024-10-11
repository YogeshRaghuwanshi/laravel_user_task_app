<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <label>Select User</label>
    <select name="user_id">
        @foreach($users as $user)
            <option value="{{ $user->id }}">{{ $user->name }}</option>
        @endforeach
    </select>

    <label>Task Detail</label><input type="text" name="task_detail" required>
    <label>Status</label>
    <select name="task_status">
        <option value="Pending">Pending</option>
        <option value="Done">Done</option>
    </select>
    <button type="submit">Add Task</button>
</form>
