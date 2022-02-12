<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Skill extends Model
{
    use HasFactory, Searchable;
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function searchableAs()//algolia search
    {
        return 'name';
    }

    public function jobs()
    {
        return $this->belongsToMany(Job::class,'job_skill');
    }
}
