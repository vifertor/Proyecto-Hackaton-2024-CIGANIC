<?php
use App\Http\Controllers\VacunaController;
use Illuminate\Support\Facades\Route;
use App\Livewire\CreateAjustes;
//Route::get('/', function () {
   // return view('welcome');
//});

Route::redirect('/', '/dashboard');



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/ajustes', CreateAjustes::class)->name('ajustes');


});

