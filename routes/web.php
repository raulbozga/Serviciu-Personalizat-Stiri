<?php

use App\Http\Controllers\AdminControlUsers;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorysController;
use GuzzleHttp\Middleware;

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





// Route::get('/dashboardAdmin', function () {
//     return view('dashboardAdmin');
// })->middleware(['auth']);

Route::group(['middleware' => 'auth'], function () {

    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Route::view('RegUsers', 'RegUsers')->name('RegUsers');

    Route::get('RegUsers', [AdminControlUsers::class, 'SeeUsers'])->middleware('admin')->name('RegUsers');
});

Route::get('/', function () {
    return view(
        'home'
    );
});

// Route::get('adminUsers', [AdminControlUsers::class, 'SeeUsers']);

// Route::get('admin', [CategorysController::class, 'admin'])->middleware('admin');

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



Route::post('/newsletter', function () {


    request()->validate(['email' => 'required|email']);

    $mailchimp = new MailchimpMarketing\ApiClient();

    $mailchimp->setConfig([
        'apiKey' => config('services.mailchimp.key'),
        'server' => 'us14'
    ]);

    try {
        $response = $mailchimp->lists->addListMember('e44cb7336c', [
            'email_address' => request('email'),
            'status' => 'subscribed',
        ]);
    } catch (\Exception $e) {
        throw \Illuminate\Validation\ValidationException::withMessages([
            'email' => 'Acest email este invalid!'
        ]);
    }

    return redirect('/')->with('success', 'Te-ai abonat la newsletter!');
});

require __DIR__ . '/auth.php';
