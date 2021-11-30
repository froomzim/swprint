<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImpressaoController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
    // $url = 'https://malandrino.superfastsolutions.online/api/acbr/getPedido';
    //     $data = Http::get($url)->json();

    //     foreach ($data['data'] as $imp) {
    //         dd($imp);
    //     }
// });

Route::get('/', [ImpressaoController::class, 'imprimeTxt']);

