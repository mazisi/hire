<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(user::class);
    }

    public function quotes(){

        return $this->hasMany(Quote::class);
     }

     public function bids(){

        return $this->hasMany(Bid::class);
     }
     public function employee_payment(){

        return $this->hasMany(EmployeePayment::class);
     }

     

    
}
