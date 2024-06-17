<?php

use App\Http\Controllers\Auth\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExcelController;
use Illuminate\Support\Facades\DB;

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


// Route::group(['middleware'=>['AuthLogin']], function () {
//     Route::get('/login',[AuthController::class, 'login'])->name('login')->middleware('AuthLogin');
//     Route::post('/userLogin',[AuthController::class, 'loginAuth'])->name('userLogin')->middleware('AuthLogin');
//     Route::get('/register',[AuthController::class, 'register'])->name('register')->middleware('AuthLogin');

//     Route::post('/userRegister',[AuthController::class, 'registerAuth'])->name('userRegister')->middleware('AuthLogin');

//     Route::get('/upload', [ExcelController::class, 'showUploadForm'])->name('upload.form');
//     Route::post('/upload', [ExcelController::class, 'uploadFile'])->name('upload.file');
    
// });

// Route::group(['middleware'=>['AuthCheck']], function(){
//     Route::get('/',[AuthController::class, 'home'])->name('home');
// });

// Route::get('/logout',[AuthController::class, 'logout'])->name('logout');

//route for excel upload


Route::group(['middleware' => ['AuthLogin']], function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('AuthLogin');
    Route::post('/userLogin', [AuthController::class, 'loginAuth'])->name('userLogin')->middleware('AuthLogin');
    Route::get('/register', [AuthController::class, 'register'])->name('register')->middleware('AuthLogin');
    Route::post('/userRegister', [AuthController::class, 'registerAuth'])->name('userRegister')->middleware('AuthLogin');
});

// Route::group(['middleware' => ['AuthCheck']], function () {
// Route::get('/', [AuthController::class, 'home'])->name('home');
   
// Route::get('/upload', [ExcelController::class, 'showUploadForm'])->name('upload.form');
// Route::post('/upload', [ExcelController::class, 'uploadFile'])->name('upload.file');
// Route::get('/dashboard', [ExcelController::class, 'showDashboard'])->name('dashboard');  
//     // Route::post('/upload', [ExcelController::class, 'uploadFile'])->name('upload.file');
// });

Route::group(['middleware' => ['AuthCheck']], function () {
    Route::get('/', [AuthController::class, 'home'])->name('home');
    Route::get('/upload', [ExcelController::class, 'showUploadForm'])->name('upload.form');
    Route::post('/upload', [ExcelController::class, 'uploadFile'])->name('upload.file');
    Route::get('/dashboard', [ExcelController::class, 'showDashboard'])->name('dashboard');
});

Route::get('/test-db-connection', function () {
    try {
        DB::connection()->getPdo();
        return 'Database connection established successfully!';
    } catch (\Exception $e) {
        return 'Database connection error: ' . $e->getMessage();
    }
});

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');



// Route::get('/upload-excel', [ExcelController::class, 'showUploadForm'])->name('upload.form');
// Route::post('/upload-excel', [ExcelController::class, 'uploadExcel'])->name('upload.excel');
// Route::post('/store-excel', [ExcelController::class, 'storeExcelData'])->name('store.excel');
// Route::get('/dashboard', [ExcelController::class, 'dashboard'])->name('dashboard');