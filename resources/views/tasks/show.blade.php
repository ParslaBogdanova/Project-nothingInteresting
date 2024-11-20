<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Task</title>
</head>

<body>
    <h1>Task Details</h1>
    <p><strong>Description:</strong> {{ $task->description }}</p>
    <p><strong>Status:</strong> {{ $task->is_completed ? 'Completed' : 'Not Completed' }}</p>

    <a href="{{ route('tasks.edit', $task->id) }}">Edit Task</a>
    <br>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>

</html>
