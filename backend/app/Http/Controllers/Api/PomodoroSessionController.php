<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\PomodoroSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PomodoroSessionController extends Controller
{
    public function index(Request $request)
    {
        // Logic: $sessions = Auth::user()->pomodoroSessions()-> ... filters ... ->get();
        return response()->json(['message' => 'PomodoroSession index placeholder', 'data' => []]);
    }

    public function store(Request $request)
    {
        // Logic: validate (user_id, task_id (if present, must belong to user), start_time, end_time, duration_minutes, type)
        // $session = Auth::user()->pomodoroSessions()->create($request->all());
        return response()->json(['message' => 'PomodoroSession store placeholder', 'data' => $request->all()], 201);
    }
}
