{{-- resources/views/tasks/edit.blade.php --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
</head>

<body>
    <h1>Edit Task</h1>
    <form action="{{ route('tasks.update', $task->id) }}" method="POST">
        @csrf
        @method('PUT') <!-- This is important for PUT request -->

        <label for="description">Task Description</label>
        <input type="text" name="description" id="description" value="{{ $task->description }}" required>
        <button type="submit">Update Task</button>
    </form>
    <a href="{{ route('tasks.index') }}">Back to Task List</a>
</body>

</html>
