<?php

namespace App\Http\Livewire\Employer;

use App\Models\Job;
use Livewire\Component;
use Livewire\WithPagination;

class MyJobs extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public function render()
    {
        $my_jobs = Job::where('user_id',auth()->id())->latest()->paginate(3);
        return view('livewire.employer.my-jobs',['my_jobs' => $my_jobs]);
    }
}
