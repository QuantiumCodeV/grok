<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/logout', function () {
    Auth::logout();
    return redirect('/');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/terms-of-use', function () {
    return view('terms-of-use');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});


Route::group(['prefix' => 'dashboard', 'as' => 'dashboard.', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('overview');
    })->name('overview');

    Route::get('/buy-coin', function () {
        return view('buy-coin');
    })->name('buy-coin');

    Route::get('/my-coins', function () {
        $orders = \App\Models\Order::where('user_id', auth()->user()->id)->orderBy('id', 'desc')->get();
        return view('my-coins', ['orders' => $orders]);
    })->name('my-coins');

    Route::get('/status', function () {
        return view('status');
    })->name('status');

    Route::get('/how-to-buy', function () {
        return view('how-to-buy');
    })->name('how-to-buy');

    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::any('/order/create', [App\Http\Controllers\DashboardController::class, 'createOrder'])->name('create-order');
    Route::get('/order/{id}', [App\Http\Controllers\DashboardController::class, 'viewOrder'])->name('view-order');

    Route::get('/admin', function () {
        $users = \App\Models\User::all();
        return view('admin', ['users' => $users]);
    })->name('admin')->middleware('admin');

    Route::post('/admin/add-balance', [\App\Http\Controllers\DashboardController::class, 'addBalance'])->name('admin.add-balance')->middleware('admin');
});
