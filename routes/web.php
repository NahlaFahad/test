<?php

use App\Http\Controllers\GroupItemController;
use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers;


Route::get('/', function () {
    return view('welcome');
});

Route::get('group',[GroupItemController::class,'index'])->name('group');
Route::post('group',[GroupItemController::class,'index'])->name('group-post');
Route::get('update/{id}',[GroupItemController::class,'updateGroup'])->name('group-update');
Route::post('updtateg',[GroupItemController::class,'update'])->name('group-put');
Route::get('items/{id}',[ItemController::class,'items'])->name('items');
Route::post('addItem',[ItemController::class,'addItem'])->name('addItem');

