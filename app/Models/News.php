<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;  // Corrected the spelling here
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'picture', 'content'];
}
