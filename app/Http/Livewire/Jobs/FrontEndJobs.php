<?php

namespace App\Http\Livewire\Jobs;

use App\Models\Category;
use App\Models\Job;
use Livewire\Component;

class FrontEndJobs extends Component
{

    public $search_by_location, $search_by_category='', $categories, $search_by_title;

    public function mount()
    {
     $this->categories = Category::get();   
    }

    public function render(){
        if(!empty($this->search_by_category)){
            $jobs = Job::where('category_id',$this->search_by_category)->get();
           
        }elseif(!empty($this->search_by_location)){
            $jobs = Job::with(['city' => function($query){
                $query->where('name','like','%'.$this->search_by_location.'%');
                }])->latest()->get();
                //dd($jobs);
        }elseif(!empty($this->search_by_title)){
            $jobs = Job::search($this->search_by_title)->get();
        }else{
            $jobs = Job::with('city')->latest()->get();
                     
           }
           
          return view('livewire.jobs.front-end-jobs',["jobs" => $jobs]);
    }
}
