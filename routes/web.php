<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;
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

Route::get('/', [HomeController::class, "home"])->name("home");

Route::get('/comics', [ComicController::class, 'index'])->name("comics.index");

Route::get("/comics/create", [ComicController::class, "create"])->name("comics.create");

Route::get("/comics/{comic}", [ComicController::class, "show"])->name("comics.show");

Route::post("/comics", [ComicController::class, "store"])->name("comics.store");

Route::get("/comics/{comic}/edit", [ComicController::class, "edit"])->name("comics.edit");

Route::put("/comics/{comic}", [ComicController::class, "update"])->name("comics.update");

Route::delete("/comics/delete/{comic}", [ComicController::class, "destroy"])->name("comics.destroy");