<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProjectType extends Model
{
    use HasFactory;
    protected $guarded = [];

    public static function generateSlug($type)
    {
        return Str::slug($type, '-');
    }

    public function projects(): HasMany
    {
        return $this->hasMany(Project::class);
    }
}