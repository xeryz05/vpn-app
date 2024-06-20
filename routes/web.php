<?php

use App\Http\Controllers\VpnController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('vpn',[VpnController::class, 'index']);

// Route::get('/', [VpnController::class,'index'])->name('/');

    
Route::resource('/',VpnController::class);
