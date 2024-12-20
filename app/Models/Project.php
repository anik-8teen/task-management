<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected  $fillable = ['name', 'project_code', 'user_id', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
