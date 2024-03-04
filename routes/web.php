<?php

use App\Http\Controllers\CarController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[PublicController::class ,'home'])->name('home'); 
 //rotte form 
 route::get('/car/create', [CarController::class,'create'])->name('car.create'); 
 route::Post('/car/store' , [CarController::class,'store'])->name('car.store'); 

 route::get('/cars/{car}', [CarController::class , 'show'] )->name('car.show'); 
 route::get('/cars', [CarController::class , 'index'])->name('car.index'); 

  //rotta per la modifica
   route::get('/car/edit/{car}', [CarController::class,'edit'])->name('car.edit');  
   route::put('/car/update/{car}', [CarController::class,'update'])->name('car.update'); 
     
   //rotta cancellazione
    route::delete('/car/delete{car}',[CarController::class,'destroy'])->name('car.destroy');
