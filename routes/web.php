<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);
 
Route::group(['middleware'=>['auth','verified']], function(){
Route::get('/home', [HomeController::class, 'index'])->name('home');

//user 
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/chats', [ChatController::class, 'index'])->name('chats');

//admin routes
Route::get('/categories', function () {return view('admin.categories');});
Route::get('/employers', function () {return view('admin.employers');});

// Jobs
// Tradesman

Route::get('/tradesman', [EmployeesController::class, 'index'])->name('tradesman');

//frontend jobs for all people to see
Route::get('jobs', function(){ return view('jobs.jobs');});
Route::get('/view-jobs/{slug}', [JobController::class, 'show'])->name('view_job');//frontend
Route::post('/bid/{slug}', [JobController::class, 'bids'])->name('submit_bid');//submit bid form
Route::get('/bid/{slug}', [JobController::class, 'unbid'])->name('undo_bid');//submit bid form
//Employees
Route::prefix('tradesman')->group(function(){
    Route::get('jobs', function(){ return view('tradesman.jobs');});
    Route::get('all-bids', function(){ return view('tradesman.all_bids');});
    Route::get('accepted-bids', function(){ return view('tradesman.accepted_bids');});
    Route::get('all-quotes', function(){ return view('tradesman.all_quotes');});
    Route::get('quote', function(){ return view('tradesman.quote');});
    Route::get('accepted-jobs', function(){ return view('tradesman.accepted_jobs');});
});


//Employers
Route::prefix('employer')->group(function(){
    // Route::get('/jobs/create', [JobsController::class, 'create'])->name('create_jobs');
    Route::get('create-job', function(){ return view('jobs.create_jobs');});
    Route::get('my-jobs', function(){ return view('jobs.my_jobs');});
    Route::get('edit-job', function(){ return view('employer.edit_my_job');});
    Route::get('jobs', function(){ return view('employer.jobs');});
    Route::get('all-bids', function(){ return view('employer.all_bids');});
    Route::get('bid', function(){ return view('employer.bid');});
    Route::get('quotes', function(){ return view('employer.accepted_jobs');});
    Route::get('quote', function(){ return view('employer.quote');});
    });
    
//agents
    Route::prefix('agent')->group(function(){
        Route::get('jobs', function(){ return view('agent.jobs');});
        Route::get('all-bids', function(){ return view('agent.all_bids');});
        Route::get('accepted-bids', function(){ return view('agent.accepted_bids');});
        Route::get('all-quotes', function(){ return view('agent.all_quotes');});
        Route::get('accepted-jobs', function(){ return view('agent.accepted_jobs');});
        
        
        });


});