<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VacancyController;
use App\Http\Controllers\SubmissionController;
use App\Models\Submission;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/login', function () {
    return view('profile/login');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/jobs_listing', [VacancyController::class, 'jobListing']);
// Route::get('/jobs_listing', [VacancyController::class, 'jobListing'])->name('jobs_listing');

Route::get('/jobs_details', [VacancyController::class, 'jobDetails']);

Route::get('/jobs_details2', [VacancyController::class, 'yyyy']);

Route::get('/dashboard', [VacancyController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::get('/register', function () {
    return view('profile/register');
});

Route::get('/admin/{pengguna}', function () {
    return view('admin/pengguna/index');
});

Route::get('/main', function () {
    return view('main');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/track', [SubmissionController::class, 'notifyHome']);

Route::get('/track_sent', function () {
    return view('/track_sent');
});

Route::get('/track_on_progress', function () {
    return view('track_on_progress');
});

Route::get('/track_accepted', function () {
    return view('track_accepted');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Route::get('/profile', [SkillController::class, 'edit'])->skill('profile.edit');
    // Route::patch('/profile', [SkillController::class, 'update'])->skill('profile.update');
    // Route::delete('/profile', [SkillController::class, 'destroy'])->skill('profile.destroy');


});

require __DIR__.'/auth.php';
