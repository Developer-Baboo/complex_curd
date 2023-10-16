<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

// Show Home page with
Route::get('/', [FormController::class, 'index']);

//Open the Form Page
Route::get('store', function () {
    return view('form');
});

//Actually Add Data
Route::post('store', [FormController::class, 'store'])->name('store');


//Actually Delete Data
Route::delete('delete/{id}', [FormController::class, 'destroy'])->name('delete');

//open edit page and fetch data from database
Route::get('edit/{id}', [FormController::class, 'edit'])->name('edit');

//Update Data
Route::put('update/{id}', [FormController::class, 'update'])->name('update');


