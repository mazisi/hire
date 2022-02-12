<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Laravel\Scout\Searchable;

class Job extends Model
{
    use HasFactory,Searchable;
    protected $guarded = [];


    public function employer(){

        return $this->belongsTo(User::class);
     }
     public function quotes(){
        return $this->hasMany(quotes::class);
    }

    public function bids(){
        return $this->hasMany(Bid::class);
    }

    public function job_documents(){
        return $this->hasMany(JobDocument::class);
    }
}
