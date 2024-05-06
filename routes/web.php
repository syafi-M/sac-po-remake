<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ImgClientController;
use App\Http\Controllers\ImgGalerryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\ImgClient;
use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [DashboardController::class, 'index'])->name('/');
Route::get('/profile-sac', [DashboardController::class, 'profil'])->name('profile-perusahaan');
Route::get('/portofolio-sac', [DashboardController::class, 'porto'])->name('portofolio-perusahaan');
Route::get('/galeri-sac', [DashboardController::class, 'galeri'])->name('galeri-perusahaan');
Route::get('/client-sac', [DashboardController::class, 'client'])->name('client-perusahaan');
Route::get('/kontak-sac', [DashboardController::class, 'kontak'])->name('kontak-perusahaan');
Route::get('/company-profile-sac', [DashboardController::class, 'companyProfile'])->name('company-profile-perusahaan');
Route::get('/outsourcing-sac', [DashboardController::class, 'outsourcing'])->name('outsourcing-perusahaan');


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function() {
    Route::resource('/post', PostController::class);
    Route::resource('/client', ImgClientController::class);
    Route::resource('/galery', ImgGalerryController::class);
});

Route::get('/admin-dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'admin'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
