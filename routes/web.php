<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Actions\Logout;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

// Маршрут для НЕ авторизованного пользователя
Route::middleware(['guest'])->group(function () {
    Route::view('/', 'welcome-marudi')->name('cms2.index');
});

// Маршрут для авторизованного пользователя
Route::middleware(['auth'])->group(function () {
    Route::get('/', \App\Livewire\Cms2\Index::class)->name('cms2.index');

    Route::get('/logout', function (Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    })->name('logout');

    Route::group([
        'as' => 'buh.',
    ], function () {
        Route::get('buh/scheta', \App\Livewire\Cms2\BuhScheta::class)
            ->name('sheta');
        Route::get('buh/uslugi', \App\Livewire\Cms2\BuhUslugi::class)
            ->name('uslugi');
        Route::get('buh/zakazs', \App\Livewire\Cms2\BuhZakaz::class)
            ->name('zakazs');
    });

    Route::get('/clients', \App\Livewire\Cms2\Clients::class)->name('clients');
    Route::get('/clients/{id}', \App\Livewire\Cms2\ClientsInfo::class)->name('clients.info');

    Route::prefix('staff')->name('staff.')->group(function () {
        Route::get('/', \App\Livewire\Cms2\Staff::class)->name('index');
        Route::get('info/{staff}', \App\Livewire\Cms2\StaffInfo::class)->name('info');
    });

    Route::prefix('dogovor')->name('dogovor.')->group(function () {
        Route::get('/', \App\Livewire\Cms2\Contracts::class)->name('index');
        Route::get('/template', \App\Livewire\Cms2\ContractsTemplate::class)->name('template');
    });

//
    Route::get('/u-list', \App\Livewire\Cms2\UserList::class)->name('user_list');
});

require __DIR__ . '/auth.php';
