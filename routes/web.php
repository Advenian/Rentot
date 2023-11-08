<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\TruckController;
use App\Http\Controllers\ProfileController;

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
    return view('welcome');
});
Route::get('/userview', function () {
    return view('user.index');
});
Route::get('/adminview', function () {
    return view('admin.index');
});
Route::get('/adminviewtrucks', function () {
    return view('admin.vehicles.trucks.truck-index');
});
Route::get('/adminviewtrucksadd', function () {
    return view('admin.vehicles.trucks.truck-add');
});
Route::get('/adminviewcars', function () {
    return view('admin.vehicles.cars.car-index');
});
Route::get('/adminviewcarsadd', function () {
    return view('admin.vehicles.cars.car-add');
});
Route::get('/adminviewcars', function () {
    return view('admin.vehicles.cars.car-index');
});
Route::get('/adminviewcarsadd', function () {
    return view('admin.vehicles.cars.car-add');
});

Route::get('/trucks', [TruckController::class, 'index'])->name('trucks.index');
Route::get('/trucks/create', [TruckController::class, 'create'])->name('trucks.create');
Route::post('/trucks', [TruckController::class, 'store'])->name('trucks.store');
Route::get('/trucks/{truck}', [TruckController::class, 'edit'])->name('trucks.edit');
Route::put('/trucks/{truck}', [TruckController::class, 'update'])->name('trucks.update');
Route::delete('/trucks/{truck}', [TruckController::class, 'destroy'])->name('trucks.destroy');

Route::get('/cars', [CarController::class, 'index'])->name('cars.index');
Route::get('/cars/create', [CarController::class, 'create'])->name('cars.create');
Route::post('/cars', [CarController::class, 'store'])->name('cars.store');
Route::get('/cars/{car}', [CarController::class, 'edit'])->name('cars.edit');
Route::put('/cars/{car}', [CarController::class, 'update'])->name('cars.update');
Route::delete('/cars/{car}', [CarController::class, 'destroy'])->name('cars.destroy');

Route::get('/bikes', [BikeController::class, 'index'])->name('bikes.index');
Route::get('/bikes/create', [BikeController::class, 'create'])->name('bikes.create');
Route::post('/bikes', [BikeController::class, 'store'])->name('bikes.store');
Route::get('/bikes/{bike}', [BikeController::class, 'edit'])->name('bikes.edit');
Route::put('/bikes/{bike}', [BikeController::class, 'update'])->name('bikes.update');
Route::delete('/bikes/{bike}', [BikeController::class, 'destroy'])->name('bikes.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
