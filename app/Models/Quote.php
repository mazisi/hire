<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    use HasFactory;
    protected $guarded = [];


    public function job(){

        return $this->belongsTo(Job::class);
     }

     public function employee(){

        return $this->belongsTo(User::class);
     }

     public function quote_fields(){
        return $this->hasMany(QouteField::class);
    }
}
