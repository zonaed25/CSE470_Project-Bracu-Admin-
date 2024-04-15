<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\StudentController;


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
})->name('/');


// Student routes
Route::middleware(['auth', 'student'])->group(function () {

    Route::get('/student', function () {
        return view('student.index');
    })->name('student');

});


// Admin routes
Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/admin', function () {
        return view('admin.index');
    })->name('admin');

    Route::get('/admin/announcement', function () {
        return view('admin.announcement.index');
    })->name('admin.announcement');

    Route::get('/admin/complaint', function () {
        return view('admin.complaint.index');
    })->name('admin.complaint');

    Route::get('/admin/payment', function () {
        return view('admin.payment.index');
    })->name('admin.payment');

    Route::get('/admin/event', function () {
        return view('admin.event.index');
    })->name('admin.event');

    Route::get('/admin/blog', function () {
        return view('admin.blog.index');
    })->name('admin.blog');

});


// Route::middleware('auth')->group(function () {
//     Route::get('/change-password', [AuthController::class, 'showChangePassword'])->name('change-password');
//     Route::post('/change-password', [AuthController::class, 'changePasswordSubmit'])->name('change-password.submit');
// });


Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


