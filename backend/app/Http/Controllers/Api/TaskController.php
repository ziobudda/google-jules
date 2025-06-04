<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    public function index(Request $request)
    {
        // Optional: $projectId = $request->query('project_id');
        // Logic: $tasks = Auth::user()->tasks()->when($projectId, ...)->get();
        return response()->json(['message' => 'Task index placeholder', 'data' => []]);
    }

    public function store(Request $request)
    {
        // Logic: validate, $task = Auth::user()->tasks()->create($request->all());
        // Ensure project_id belongs to the user if provided.
        return response()->json(['message' => 'Task store placeholder', 'data' => $request->all()], 201);
    }

    public function show(Task $task)
    {
        // Logic: check authorization
        return response()->json(['message' => 'Task show placeholder', 'data' => $task]);
    }

    public function update(Request $request, Task $task)
    {
        // Logic: check authorization, validate, $task->update($request->all());
        return response()->json(['message' => 'Task update placeholder', 'data' => $task]);
    }

    public function destroy(Task $task)
    {
        // Logic: check authorization, $task->delete();
        return response()->json(['message' => 'Task destroy placeholder'], 204);
    }
}
