<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\{
    Calendar, CardapioController
};
use App\Http\Controllers\Admin\{
    HomeController, AdminLoginController
};

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('admin/dashboard', [HomeController::class, 'index'])->name('admin.dashboard');
Route::post('admin/dashboard', [App\Http\Livewire\CardapioController::class, 'store']);

Route::get('/cardapio', App\Http\Livewire\CardapioController::class)->name('cardapio');

//admin

Route::group(['prefix' => 'admin'], function(){

    Route::group(['middleware' => 'admin.guest'], function (){

        Route::get('/login', [AdminLoginController::class, 'index'])->name('admin.login');
        Route::post('/authenticate', [AdminLoginController::class, 'authenticate'])->name('admin.authenticate');
    });

    Route::group(['middleware' => 'admin.auth'], function (){

    });
});
