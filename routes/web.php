<?php
use App\Http\Controllers\VacunaController;

use Illuminate\Support\Facades\Route;
use App\Livewire\CreateAjustes;
use App\Livewire\Vacunna\Vervacuna;
use App\Livewire\Vacunna\CrearVacuna;
use App\Livewire\Vacunna\EditarVacuna;

//Route::get('/', function () {
   // return view('welcome');
//});

Route::redirect('/', '/dashboard');

Route::get('/zzz',Vervacuna::class);
Route::get('/crear', CrearVacuna::class);
Route::get('/editarvacuna/{vacunaID}', EditarVacuna::class)->name('editarvacuna');



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

