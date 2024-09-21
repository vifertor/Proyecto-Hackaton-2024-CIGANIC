<?php
use App\Http\Controllers\VacunaController;
use App\Livewire\Vacuna;
use Illuminate\Support\Facades\Route;
use App\Livewire\CreateAjustes;
use App\Models\vacunas;

//Route::get('/', function () {
   // return view('welcome');
//});

Route::redirect('/', '/dashboard');




Route::get('/vacunas', [VacunaController::class, 'index']);





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',



])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/ajustes', CreateAjustes::class)->name('ajustes');

    Route::get('/vacunas', vacuna::class)->name('vacunas');


});

