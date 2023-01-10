<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description', 'image_1', 'image_2', 'github_link'];
    public static function generateSlug($name)
    {
        return Str::slug($name, '-');
    }
}