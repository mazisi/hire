<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\JobsController;

class JobsController extends Controller
{

   
  



    public function index()
    {
        return view('jobs.jobs');
    }




    public function create()
    {
        return view('jobs.create_jobs');
    }
}
