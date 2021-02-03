<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\ProjetoRouanetTeste;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/projetoRouanet', function(){

    $resposta = ProjetoRouanetTeste::all();

    return Response::json($resposta);

})->name('api.projetoRouanet');

