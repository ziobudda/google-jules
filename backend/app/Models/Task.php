<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'description',
        'project_id',
        'user_id',
        'completed',
        'due_date',
    ];

    protected $casts = [
        'completed' => 'boolean',
        'due_date' => 'date',
    ];

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * Get the project that the task belongs to.
     */
    public function project()
    {
        return $this->belongsTo(\App\Models\Project::class);
    }

    /**
     * Get the pomodoro sessions for the task.
     */
    public function pomodoroSessions()
    {
        return $this->hasMany(\App\Models\PomodoroSession::class);
    }
}
