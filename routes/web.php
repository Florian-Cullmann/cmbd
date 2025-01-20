<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaffController;

Route::get('/', [StaffController::class, 'index'])->name('staff.index'); // Liste aller Mitarbeiter
Route::get('/staff/{id}', [StaffController::class, 'show'])->name('staff.show'); // Verlauf eines Mitarbeiters
