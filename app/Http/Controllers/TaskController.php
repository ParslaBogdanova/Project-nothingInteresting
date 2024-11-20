<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', ['tasks' => $tasks]);
    }

    public function create(){
        return view('tasks.create');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'description' => 'required|string|max:255',
        ]);

        $task = Task::create([
            'description' => $request->input('description'),
            'is_completed' => false,
        ]);

        return redirect()->route('tasks.index');
    }

    public function show(Task $task){
        $allTasks = Task::all();
        return view('tasks.show', ['task' => $task, 'allTasks' => $allTasks]);
    }

    public function edit($id){
        $task = Task::findOrFail($id);
        return view('tasks.edit', ['task' => $task]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'description' => 'required',
        ]);
    
        $task = Task::findOrFail($id);
        $task->update([
            'description' => $request->input('description'),
        ]);
    
    
        return redirect()->route('tasks.index');
    }

    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('tasks.index');
    }
}
