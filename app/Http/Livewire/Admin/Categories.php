<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use Livewire\WithPagination;

class Categories extends Component
{
    // use WithPagination;
    // protected $paginationTheme = 'bootstrap';

    public $name, $category, $slug;

    public function store()
    {
       $this->validate([
        "name" => "required|string|max:255"
       ]);      
       Category::create(["name" => $this->name, "slug" => $this->name.'_'.Str::random(5).uniqid(true),]);
       $this->emit('close-modal');
       $this->reset("name");
       session()->flash("success","Category created successfulyy");
    }

    public function edit($slug){ 
        $this->category = Category::whereSlug($slug)->first();
        $this->name = $this->category->name;
        $this->slug = $this->category->slug;
    }

    public function update()
    {
        Category::whereSlug($this->slug)->update(["name" => $this->name]);
        session()->flash('success','Category update successfully.');
        $this->emit('close-modal');
        return back();     
    }

    //Fake model that reset create modal...........
    public function reset_create_modal(){        
        $this->category = Category::make(['created_at' => now()]);
        $this->reset("name");      
    }

    public function render()
    {
        return view('livewire.admin.categories',["categories" => Category::latest()->get()]);
    }

    public function delete($slug)
    {
        $this->category = Category::whereSlug($slug)->delete();
        session()->flash('success','Category deleted successfully.');
        return back();
    }
}
