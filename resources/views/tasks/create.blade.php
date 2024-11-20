<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Task</title>
</head>

<body>
    <h1>Create New Task</h1>
    <form action="{{ route('tasks.store') }}" method="POST">
        @csrf
        <label for="description">Task Description</label>
        <input type="text" name="description" id="description" required>
        <button type="submit">Save Task</button>
    </form>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>

</html>
