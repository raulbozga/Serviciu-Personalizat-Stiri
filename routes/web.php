<?php

use App\Models\Post;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorysController;

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


Route::get('/', function () {
    return view(
        'home'
    );
});


Route::get('/categories/sport', [CategorysController::class, 'sport']);

Route::get('/categories/business', [CategorysController::class, 'business']);

Route::get('/categories/environment', [CategorysController::class, 'environment']);

Route::get('/categories/food', [CategorysController::class, 'food']);

Route::get('/categories/health', [CategorysController::class, 'health']);

Route::get('/categories/politics', [CategorysController::class, 'politics']);

Route::get('/categories/science', [CategorysController::class, 'science']);

Route::get('/categories/technology', [CategorysController::class, 'technology']);

Route::get('/categories/top', [CategorysController::class, 'top']);

Route::get('/categories/world', [CategorysController::class, 'world']);

Route::get('/categories/weather', [CategorysController::class, 'weather']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Route::get('stiri/{stire}', function ($id) {


//     return view('stire', [
//         'stire' => Post::findOrFail($id)
//     ]);
// }); // constrangere pentru ruta url

require __DIR__ . '/auth.php';
