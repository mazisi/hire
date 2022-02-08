<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    public function user(){

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
