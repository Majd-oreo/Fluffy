<?php

use App\Http\Controllers\Admin\AppointmentsController;
use App\Http\Controllers\Admin\BlogsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Employee\DashboardEmController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UsersController;
use App\Http\Controllers\Admin\PetsController;
use App\Http\Controllers\Admin\ReviewController;
use App\Http\Controllers\Admin\ServiceController as AdminServiceController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Employee\AppointmentEmController;
use App\Http\Controllers\employee\BlogsEmController;
use App\Http\Controllers\Employee\PetEmController;
use App\Http\Controllers\employee\ReviewEmController;
use App\Models\Blog;
use App\Models\User;
use App\Models\Employee;

use App\Models\Review;

use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

    $employees = User::where('role', 'employee')
    ->whereHas('employee', function ($query) {
        $query->where('status', 'active');
    })
    ->with('employee') 
    ->get();




    $reviews = Review::latest()->take(4)->get();

    return view('user.index', compact('blogs', 'employees', 'reviews'));
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
    Route::put('/appointments/{service_id}/review', [AppointmentController::class, 'storeReview'])->name('appointment.review');
    Route::post('/appointments/{service_id}/review', [AppointmentController::class, 'storeReview'])->name('appointment.review');

    Route::delete('/appointment/review/{review}', [AppointmentController::class, 'deleteReview'])->name('appointment.review.delete');
    Route::delete('/appointments/{appointment}', [AppointmentController::class, 'destroy'])->name('appointments.destroy');

    Route::get('/userappointment', [AppointmentController::class, 'userappointments'])->name('userappointment');
    Route::resource('pets', controller: PetController::class);
    Route::get('/get-category-price/{id}', [AppointmentController::class, 'getCategoryPrice'])->name('getCategoryPrice');

});


Route::middleware(['auth', 'role:admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('users', UsersController::class);
    Route::resource('pets', PetsController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('services', ServicesController::class);
    Route::resource('blogs', BlogsController::class);
    Route::resource('appointments', AppointmentsController::class);
    Route::resource('reviews', ReviewController::class);







});

Route::middleware(['auth', 'role:employee', 'check.employee.status'])->prefix('employee')->name('employee.')->group(function () {
    Route::get('/', [DashboardEmController::class, 'index'])->name('dashboard');
    Route::resource('pets', PetEmController::class);
    Route::resource('blogs', BlogsEmController::class);
    Route::resource('appointments',AppointmentEmController::class);
    Route::resource('reviews',ReviewEmController::class);

    










});

Route::get('/not-available', function () {
    return view('employee.not-available'); 
})->name('not-available');




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
