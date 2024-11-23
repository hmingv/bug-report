<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/upload', function (Request $request) {
    Validator::make($request->all(), [
        'file' => 'required|file|mimes:cdr,ai|mimetypes:application/coreldraw,application/cdr,application/illustration',
    ])->validated();
});
