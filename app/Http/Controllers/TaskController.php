<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
public function index()
{
    $tasks = Task::where('user_id', auth()->id())->get();
    return view('tasks.index', compact('tasks'));
}

public function store(Request $request)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
    ]);
    Task::create([
        'title' => $validated['title'],
        'description' => $validated['description'],
        'user_id' => auth()->id(),
    ]);
    return redirect()->route('tasks.index');
}

public function update(Request $request, Task $task)
{
    $validated = $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string|max:1000',
    ]);
    $task->update($validated);
    return redirect()->route('tasks.index');
}

public function destroy(Task $task)
{
    $task->delete();
    return redirect()->route('tasks.index');
}
}