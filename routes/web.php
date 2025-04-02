<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PetController;


use App\Models\Blog;
use App\Models\User;




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
    $blogs = Blog::all(); 
    $employees = User::where('role', 'employee')->get(); 

    return view('user.index', compact('blogs', 'employees'));
})->name('home');



Route::get('/blogs/{id}', [IndexController::class, 'show'])->name('blog.show');


Route::get('/team', [UserController::class, 'show'])->name('team.index');
Route::get('/about', [UserController::class, 'showAboutUs'])->name('user.about-us');
Route::get('/service', [ServiceController::class, 'index'])->name('user.services');
// Route::get('services/{id}', [ServiceController::class, 'show'])->name('service.show');




Route::get('/gallary', function () {
    return view('user.our-gallery');  
})->name('gallary');

Route::get('/rescue', function () {
    return view('user.service-rescue');  
})->name('rescue');
Route::get('/contact', function () {
    return view('user.contact');  
})->name('contact');
Route::get('/grooming', function () {
    return view('user.service-grooming');  
})->name('grooming');
Route::middleware(['auth'])->group(function () {
    Route::post('/appointment/{id}', [AppointmentController::class, 'store'])->name('appointment.store');

    Route::get('/appointment/{id}', [AppointmentController::class, 'showAppointment'])->name('appointment.show');

    Route::post('/appointments/book', [AppointmentController::class, 'bookAppointment'])->name('book.appointment');
    
    Route::post('/appointments/{service_id}/review', [AppointmentController::class, 'storeReview'])->name('appointment.review');

    Route::get('/userappointment', [AppointmentController::class, 'userappointments'])->name('userappointment');

    Route::resource('pets', controller: PetController::class);

});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
