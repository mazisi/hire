<?php

namespace App\Http\Controllers;

use App\Models\Bid;
use App\Models\Job;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JobController extends Controller
{
 
    public function show($slug)
    {
        $job = Job::whereSlug($slug)->firstOrFail();
        // $similar_jobs = Job::where()->latest()->get();
        return view('jobs.view_job', compact('job'));
    }

    public function bids($slug)
    {
        abort_if(! auth()->user()->hasRole('employee'), 403);
        $job = Job::whereSlug($slug)->firstOrFail();
        $insert = DB::table('bids')->insert([
            ['user_id' => auth()->id(),
             'job_id' => $job->id,
             'note' => request()->content,
             'created_at' => now(),
             'updated_at' => now(),
             'slug' => auth()->user()->first_name.'_'. auth()->user()->last_name.Str::random(5).uniqid(true),
            ],
       
        ]);
        if($insert){
            return back()->with('success','Bid placed successfully.');
        }
        return back()->with('error','An unknown error occured');
    }

    public function unbid($slug){
        $job = Job::whereSlug('job_id',$slug)->firstOrFail();

        $bid = DB::table('bids')
                ->where('user_id',auth()->id())
                ->where('job_id', $job->id)
                ->first();

                if($bid->delete()){
                    return back()->with('success','Bid unplaced successfully.');
                }
                return back()->with('error','An unknown error occured');
    }
}
