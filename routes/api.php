<?php

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

// /*
// |--------------------------------------------------------------------------
// | API Routes
// |--------------------------------------------------------------------------
// |
// | Here is where you can register API routes for your application. These
// | routes are loaded by the RouteServiceProvider within a group which
// | is assigned the "api" middleware group. Enjoy building your API!
// |
// */

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::apiResource('provinsi', 'App\Http\Controllers\ProvinsiController');
// Route::apiResource('kota', 'App\Http\Controllers\KotaController');
// Route::post('penduduk', 'App\Http\Controllers\PendudukController@store');
// Route::get('provinsi', 'App\Http\Controllers\ProvinsiController@index');
// Route::get('kota', 'App\Http\Controllers\KotaController@index');
// Route::get('penduduk', 'App\Http\Controllers\PendudukController@index');
// Route::get('penduduk/search', 'App\Http\Controllers\PendudukController@search');
// Route::get('penduduk/total', 'App\Http\Controllers\PendudukController@total');
// Route::get('penduduk/umur', 'App\Http\Controllers\PendudukController@umur');

// routes/api.php

use App\Http\Controllers\PendudukController;
use App\Http\Controllers\ProvinsiController;
use App\Http\Controllers\KotaController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'penduduk'], function () {
    Route::get('/', [PendudukController::class, 'index']);
    Route::post('/', [PendudukController::class, 'store']);
    Route::get('/search', [PendudukController::class, 'search']);
    Route::get('/total', [PendudukController::class, 'total']);
    Route::get('/umur', [PendudukController::class, 'umur']);
});

Route::group(['prefix' => 'provinsi'], function () {
    Route::get('/', [ProvinsiController::class, 'index']);
    Route::post('/', [ProvinsiController::class, 'store']);
    Route::put('/{id}', [ProvinsiController::class, 'update']);
    Route::delete('/{id}', [ProvinsiController::class, 'destroy']);
});

Route::group(['prefix' => 'kota'], function () {
    Route::get('/', [KotaController::class, 'index']);
    Route::post('/', [KotaController::class, 'store']);
    Route::put('/{id}', [KotaController::class, 'update']);
    Route::delete('/{id}', [KotaController::class, 'destroy']);
});
