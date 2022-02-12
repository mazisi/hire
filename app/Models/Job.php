<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Scout\Searchable;

class Job extends Model
{
    use HasFactory, Searchable;
    protected $guarded = [];

    public function searchableAs()//algolia search
    {
        return 'name';
    }

    public function skills()
    {
        return $this->belongsToMany(Skill::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function job_documents()
    {
        return $this->hasMany(JobDocuments::class);
    }


}
