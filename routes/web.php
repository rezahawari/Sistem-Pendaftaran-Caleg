<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DapilController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\GetGeoJSONController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\ResponseController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [MainController::class, 'goHome']);
Route::get('/profil', [MainController::class, 'goProfile']);
Route::get('/doc', [MainController::class, 'goDoc']);
Route::get('/status', [MainController::class, 'goStatus']);
Route::get('/pengajuan', [MainController::class, 'goPengajuan']);

Route::post('/profil/store', [DataController::class, 'storeprofil']);
Route::post('/doc/store', [DataController::class, 'storedocument']);
Route::get('/doc/{user}', [DataController::class, 'destroyDoc']);

Route::get('/admin', [AdminController::class, 'directtodash']);
Route::get('/admin/dashboard', [AdminController::class, 'goDashboard']);
Route::get('/admin/getjsonjateng/{dapil}', [GetGeoJSONController::class, 'getDapil']);
Route::get('/admin/pengajuan', [AdminController::class, 'goAdminPengajuan']);
Route::get('/admin/caleg/{user}/detail', [AdminController::class, 'goAdminDetail']);
Route::get('/admin/pengajuan/{user}/{pengajuan}/detail', [AdminController::class, 'goPengajuanDetail']);

Route::get('/admin/user', [AdminController::class, 'goAdminUser']);
Route::post('/admin/user/add-admin', [UserController::class, 'storeAdmin']);
Route::get('/admin/user/{user}/destroy', [UserController::class, 'destroy']);

Route::get('/admin/caleg', [AdminController::class, 'goAdminCaleg']);
Route::get('/admin/caleg/{user}/destroy',[UserController::class, 'destroyCaleg']);
Route::post('/admin/user/add-caleg', [UserController::class, 'storeCaleg']);

Route::get('/admin/dapil', [AdminController::class, 'goDapil']);
Route::post('/admin/dapil/store', [DapilController::class, 'store']);
Route::get('/admin/dapil/{dapil}/edit', [AdminController::class, 'editdapil']);
Route::post('/admin/dapil/{dapil}/update', [DapilController::class, 'update']);

Route::post('/pengajuan/store', [PengajuanController::class, 'store']);

Route::post('/admin/pengajuan/detail/response', [ResponseController::class, 'store']);




Route::get('login', function () {
    return view('login');
});

// Route::get('dashboard', function () {
//     return view('Admin.db');
// });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
