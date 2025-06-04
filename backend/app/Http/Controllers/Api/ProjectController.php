<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        // Optional: $clientId = $request->query('client_id');
        // Logic: $projects = Auth::user()->projects()->when($clientId, ...)->get();
        return response()->json(['message' => 'Project index placeholder', 'data' => []]);
    }

    public function store(Request $request)
    {
        // Logic: validate, $project = Auth::user()->projects()->create($request->all());
        return response()->json(['message' => 'Project store placeholder', 'data' => $request->all()], 201);
    }

    public function show(Project $project)
    {
        // Logic: check authorization
        return response()->json(['message' => 'Project show placeholder', 'data' => $project]);
    }

    public function update(Request $request, Project $project)
    {
        // Logic: check authorization, validate, $project->update($request->all());
        return response()->json(['message' => 'Project update placeholder', 'data' => $project]);
    }

    public function destroy(Project $project)
    {
        // Logic: check authorization, $project->delete();
        return response()->json(['message' => 'Project destroy placeholder'], 204);
    }
}
