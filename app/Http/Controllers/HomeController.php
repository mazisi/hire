<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $role = Role::whereName('admin')->first();
        // if(!$role){
        //     Role::create(['name' => 'admin']);
        //     auth()->user()->assignRole('admin');
        // }
        if(auth()->user()->hasRole('admin')){
            return view('admin.index');
        }elseif(auth()->user()->hasRole('employee')){
            return view('home');
        }
        return view('home');
    }
}
