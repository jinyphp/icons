<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

//HR
Route::middleware(['web','auth:sanctum', 'verified'])
->name('icon.')
->prefix('/jiny/icons')->group(function () {



});
