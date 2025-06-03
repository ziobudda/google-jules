<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
// No need to import User and Project if using ::class syntax with full namespace resolution in methods,
// but it's good practice if they are frequently type-hinted or used.
// use App\Models\User;
// use App\Models\Project;

class Client extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_info',
        'user_id',
    ];

    /**
     * Get the user that owns the client.
     */
    public function user()
    {
        return $this->belongsTo(\App\Models\User::class);
    }

    /**
     * Get the projects for the client.
     */
    public function projects()
    {
        return $this->hasMany(\App\Models\Project::class);
    }
}
