<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', \App\Livewire\Cms2\Staff::class );
//Route::get('/staff', \App\Livewire\Cms2\Staff::class )->name('staff.index');
////Route::get('/', function () {
////    return view('welcome');
////});
//
//
//use Illuminate\Support\Facades\Route;
//use App\Livewire\Counter;

Route::get('/', function () {
    return redirect(route('buh.zakazs'));
});

//Route::get('/counter', Counter::class);

Route::group([
    'as' => 'buh.',
], function () {
    Route::get('buh/scheta', \App\Livewire\Cms2\BuhScheta::class)
        ->name('sheta');
    Route::get('buh/uslugi', \App\Livewire\Cms2\BuhUslugi::class)
        ->name('uslugi');
    Route::get('buh/zakazs', \App\Livewire\Cms2\BuhZakaz::class)
        ->name('zakazs');
} );

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
