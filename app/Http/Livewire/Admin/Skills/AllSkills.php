<?php

namespace App\Http\Livewire\Admin\Skills;

use App\Models\Skill;
use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class AllSkills extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    
    public $name, $category_id, $skill_slug, $skill, $category, $search_skill;

    public $category_options = [
        "select_category" => ''
    ];

    public function mount() {$this->select_category = Category::get();}

    public function store()
    {
       $this->validate([
        "name" => "required|string|max:255",
       ]);      
       Skill::create([
           "name" => $this->name,
           "category_id" => $this->category_options['select_category'],
           "slug" => $this->name.'_'.Str::random(5).uniqid(true),]);

       $this->emit('close-modal');
       $this->reset("category_options");
       session()->flash("success","Skill created successfulyy");
    }


    public function reset_create_modal(){        
        $this->category = Skill::make(['created_at' => now()]);
        $this->reset("name");
        $this->reset("category_options");      
    }

    public function edit($slug){ 
        $this->skill = Skill::whereSlug($slug)->first();
        $this->name = $this->skill->name;
        $this->skill_slug = $this->skill->slug;//skill_slug so that it doesnt clash with category slug
        $this->category = $this->skill->category->name;
    }

    public function update()
    {
        Skill::whereSlug($this->skill_slug)->update(["name" => $this->name]);
        session()->flash('success','Skill updated successfully.');
        $this->emit('close-modal');
        return back();     
    }

    public function render()
    {
        if(empty($this->search_skill)){
            $all_skills = Skill::latest()->paginate(6);
           }else{
            $all_skills = Skill::search($this->search_skill)->paginate(6);
           }
        return view('livewire.admin.skills.all-skills',["skills" => $all_skills]);
    }

    public function delete($slug)
    {
        Skill::whereSlug($slug)->delete();
        session()->flash('success','Skill deleted successfully.');
        return back();
    }
}
