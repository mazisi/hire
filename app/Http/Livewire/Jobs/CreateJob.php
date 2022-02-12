<?php

namespace App\Http\Livewire\Jobs;

use App\Models\Job;
use App\Models\City;
use Livewire\Component;
use App\Models\Category;
use App\Models\JobDocuments;
use App\Models\Skill;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;

class CreateJob extends Component
{
    use WithFileUploads;

    public $files = [], $provinces,$cities,$job_categories, $description, $job_type;
    public $selectedProvince = NULL, 
            $selectedCategory = NULL,
            $job_title,$city_id, 
            $name, 
            $skills,
            $skill_id = [],
            $category_id;
    
protected $rules = [
        'files' => 'required|mimes:pdf|max:100',
        'description' => 'required',
        'job_title' => 'required|max:255',
        'city_id' => 'required|exists:cities,id',
        'skill_id' => 'required|exists:skill,id',
        'category_id' => 'required|exists:category,id',
    ];

  public function mount(){
    $this->provinces = City::get();
    $this->cities = collect();
    $this->job_categories = Category::with('skills')->get();
    $this->skills = collect();
  }

  public function updatedSelectedProvince($provinces) {
       if (!is_null($provinces)) {$this->cities = City::where('province', $provinces)->get();}
  }

  public function updatedSelectedCategory($job_categories) {
    if (!is_null($job_categories)) {$this->skills = Skill::where('category_id', $job_categories)->get();}
  }

    public function store(){
       $this->validate();     
        $job = Job::create([
            "user_id" => auth()->id(),
            "city_id" => $this->city_id,
            "category_id" => $this->category_id,
            "name" => $this->job_title,
            "description" => $this->description,
            "slug" => $this->job_title.Str::random(5).uniqid(true),
        ]);
        foreach($this->skills as $skill){
          $job->skills()->attach($skill);
        }

      if($this->files != ""){
        foreach ($this->files as $file) {
          $upload = $file->store('jobs', 'public');
          JobDocuments::create([ 
              'job_id' => $job->id,
              'file_path' => $upload
          ]);
        }
      }
      $this->reset(["city_id","job_title","description","skill_id","selectedCategory","selectedProvince"]);
    }

    public function render(){
        return view('livewire.jobs.create-job');
    }
}
