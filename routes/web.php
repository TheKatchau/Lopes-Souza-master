<?php

use Illuminate\Support\Facades\Route;

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
/*
Route::get('/', function () {
    return view('site.home');
});*/

use App\Http\Controllers\EventController;
use App\Http\Controllers\ImovelController;

Route::get('/', [EventController::class, 'index']);

Route::get('/dashboard', [ImovelController::class,'index']
)->middleware(['auth'])->name('site.admin.dashboard');

Route::get('/edit', [ImovelController::class,'table']
)->middleware(['auth'])->name('site.admin.edit');

Route::post('/addimoveis',[ImovelController::class, 'store']);

Route::delete('/edit/{id}',[ImovelController::class,'destroy'])->middleware(['auth']);

Route::get('/edit/imov{id}',[ImovelController::class,'edit'])->middleware(['auth']);

Route::put('/imov/update/{id}',[ImovelController::class,'update'])->middleware(['auth']);

Route::get('/Adicionarimoveis', function () {
    return view('site.admin.Addimov');
})->middleware(['auth'])->name('site.admin.Addimov');


Route::get('/home', function () {
    return view('site.user.guestdash');
});

Route::get('/detalhes/{id}', [EventController::class, 'show']);

Route::any('/imoveis', [EventController::class, 'filt']);

Route::get('/quemsomos', [EventController::class, 'quem']);




require __DIR__.'/auth.php';
