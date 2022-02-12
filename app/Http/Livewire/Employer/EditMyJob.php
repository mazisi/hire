<?php

namespace App\Http\Livewire\Employer;

use App\Models\Job;
use App\Models\City;
use App\Models\Skill;
use Livewire\Component;
use App\Models\Category;
use App\Models\JobDocuments;
use Livewire\WithFileUploads;

class EditMyJob extends Component
{
  use WithFileUploads;

    public $files = [], $provinces,$cities,$job_categories, $description, $job_type;
    public $selectedProvince = NULL, 
            $selectedCategory = NULL,
            $job_title,$city_id, 
            $name, 
            $skills,
            $skill_id = [],
            $category_id,
            $attachments,//attachments previously uploaded.
            $job;//from url

protected $queryString = ['job'];

protected $rules = [
        'files' => 'required|mimes:pdf|max:100',
        'description' => 'required',
        'job_title' => 'required|max:255',
        'city_id' => 'required|exists:cities,id',
        'skill_id' => 'required|exists:skill,id',
        'category_id' => 'required|exists:category,id',
    ];

  public function mount(){
    $job = Job::with('job_documents','city')->whereSlug($this->job)->first();
    $this->attachments = $job->job_documents;
    $this->job_title = $job->name;
    $this->description = $job->description;

    $this->provinces = City::distinct()->get(["province"]);
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

    public function render() {return view('livewire.employer.edit-my-job');}

    public function delete_document($id){//remove uploaded document
      $job = Job::whereSlug($this->job)->first();
      abort_if(! auth()->id() === $job->user_id, 403);
        $doc = JobDocuments::findOrFail($id);
        unlink("storage/".$doc->file_path);
        $doc->delete();
     
      return back();
    }
}
