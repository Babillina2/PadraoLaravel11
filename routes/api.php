<?php

use App\Http\Controllers\VeiculoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::resource('veiculos', VeiculoController::class);