<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\MessagesController;
use App\Http\Controllers\EmployeesController;

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
 
// Jobs

Route::get('/jobs', [JobsController::class, 'index'])->name('jobs');

// Tradesman

Route::get('/tradesman', [EmployeesController::class, 'index'])->name('tradesman');


Route::group(['middleware'=>['auth','verified']], function(){
Route::get('/home', [HomeController::class, 'index'])->name('home');

//user 
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/chats', [ChatController::class, 'index'])->name('chats');


// Employee 
Route::prefix('tradesman')->group(function(){
Route::get('jobs', function(){ return view('tradesman.jobs');});
Route::get('all-bids', function(){ return view('tradesman.all_bids');});
Route::get('accepted-bids', function(){ return view('tradesman.accepted_bids');});
Route::get('all-quotes', function(){ return view('tradesman.all_quotes');});
Route::get('quote', function(){ return view('tradesman.quote');});
Route::get('accepted-jobs', function(){ return view('tradesman.accepted_jobs');});


});
// Employer

Route::prefix('employer')->group(function(){
Route::get('/jobs/create', [JobsController::class, 'create'])->name('create_jobs');
Route::get('jobs', function(){ return view('employer.jobs');});
Route::get('all-bids', function(){ return view('employer.all_bids');});
Route::get('bid', function(){ return view('employer.bid');});
Route::get('quotes', function(){ return view('employer.accepted_jobs');});
Route::get('quote', function(){ return view('employer.quote');});
});

// Agent 
Route::prefix('agent')->group(function(){
    Route::get('jobs', function(){ return view('agent.jobs');});
    Route::get('all-bids', function(){ return view('agent.all_bids');});
    Route::get('accepted-bids', function(){ return view('agent.accepted_bids');});
    Route::get('all-quotes', function(){ return view('agent.all_quotes');});
    Route::get('accepted-jobs', function(){ return view('agent.accepted_jobs');});
    
    
    });
});