<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    // We added 'image' to this list so the database accepts the file path
    protected $fillable = [
        'title', 
        'description', 
        'image'
    ];
}