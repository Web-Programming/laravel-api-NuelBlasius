<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/menu', function (Request $request) {
    return response()->json(['Home', 'Profile', 'About', 'Contact Us']);
});

Route::get('/donatur', function (Request $request) {
    return response()->json([
        ['id'=>1, 'name'=>'Valen'],
        ['id'=>2, 'name'=>'Jessen'],
        ['id'=>3, 'name'=>'Jason'],
        ['id'=>4, 'name'=>'Felix'],
        ['id'=>5, 'name'=>'Arjun'],
        ['id'=>6, 'name'=>'Kevin'],
        ['id'=>7, 'name'=>'Eddo'],
    ]);
});