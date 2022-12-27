<?php

namespace App\Http\Controllers;

use App\Models\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Tasks::all();

        return view('tasks.index')
            ->with('tasks', $tasks);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $task = Tasks::create($request->all());
        return to_route('tasks.index');
    }

    public function destroy(Request $request)
    {
        Tasks::destroy($request->task);

        return to_route('tasks.index');
    }

    public function edit(Tasks $task)
    {
        return view('tasks.edit')->with('task', $task);
    }

    public function update(Tasks $task, Request $request)
    {
        $task->fill($request->all());
        $task->save();

        return to_route('tasks.index');
    }
    
}