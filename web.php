 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

// Main pages
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/departments', [PageController::class, 'departments'])->name('departments');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/doctors', [PageController::class, 'doctors'])->name('doctors');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [PageController::class, 'contactSubmit'])->name('contact.submit');

// Additional pages
Route::get('/appointment', [PageController::class, 'appointment'])->name('appointment');
Route::get('/department-details', [PageController::class, 'departmentDetails'])->name('department-details');
Route::get('/service-details', [PageController::class, 'serviceDetails'])->name('service-details');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/gallery', [PageController::class, 'gallery'])->name('gallery');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
Route::get('/privacy', [PageController::class, 'privacy'])->name('privacy');
// Auth Routes
Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

// Admin Routes
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\AdminController::class, 'dashboard'])->name('dashboard');
    
    // Settings (Doctor Management)
    Route::get('/settings', [App\Http\Controllers\Admin\DoctorController::class, 'index'])->name('settings');
    Route::get('/settings/doctors/create', [App\Http\Controllers\Admin\DoctorController::class, 'create'])->name('doctors.create');
    Route::post('/settings/doctors', [App\Http\Controllers\Admin\DoctorController::class, 'store'])->name('doctors.store');
    Route::get('/settings/doctors/{doctor}/edit', [App\Http\Controllers\Admin\DoctorController::class, 'edit'])->name('doctors.edit');
    Route::put('/settings/doctors/{doctor}', [App\Http\Controllers\Admin\DoctorController::class, 'update'])->name('doctors.update');
    Route::delete('/settings/doctors/{doctor}', [App\Http\Controllers\Admin\DoctorController::class, 'destroy'])->name('doctors.destroy');

    // Contact Us
    Route::get('/contact-us', [App\Http\Controllers\Admin\ContactController::class, 'index'])->name('contact-us');
    Route::delete('/contact-us/{contact}', [App\Http\Controllers\Admin\ContactController::class, 'destroy'])->name('contact-us.destroy');
});
