<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\PhotosController;
use App\Http\Controllers\SampleController;
use App\Http\Controllers\SongsController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\CustomerController;
use App\Http\Middleware\StudentMiddleware;
// use App\Http\Middleware\TeacherMiddleware;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::prefix('user')->controller(StudentController::class)->middleware(TeacherMiddleware::class)->group(function(){
Route::get('/{id}','show');
});
Route::prefix('student')->controller(StudentController::class)->middleware(StudentMiddleware::class)->group(function(){
    Route::get('/','index');
    Route::get('/users','show');
    Route::get('/edit/{id}','edit');
    Route::put('/update/{id}','update');
    Route::view('/add','Student.add');
});
Route::prefix('teacher')->controller(TeacherController::class)->middleware('teacher')->group(function(){
    Route::get('/','show');
    Route::get('/{id}','index');
});
Route::get('user',[StudentController::class,'index'])->middleware('auth');
Route::view('sample','Sample');
Route::view('sample1','Sample1');
// Route::view('add1','add');
Route::prefix('song')->controller(SongsController::class)->group(function(){
Route::view('/','Song.add');
Route::get('/','index');
Route::POST('/insert','Create');
});
Route::prefix('photo')->controller(PhotosController::class)->group(function(){
    Route::view('image','Photo.home');
    Route::get('/insert','show');
    
});
Route::get('samples',[SampleController::class,'index']);
Route::get('samples',[SampleController::class,'show']);
Route::get('text',[TextController::class,'index']);
Route::prefix('customer')->controller(CustomerController::class)->group(function(){
    Route::get('/','index');
    Route::view('/create','Customer.add');
    Route::POST('/uploedCustomer','create');
});
Route::prefix('product')->controller(ProductsController::class)->group(function(){
    Route::get('/add','showForm');
    Route::post('/create','create');
});

require __DIR__.'/auth.php';
