<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/events', function () {
    return view('events');
});
Route::get('/gallery', function () {
    return view('gallery');
});
Route::get('/articles', function () {
    return view('articles');
});

use Illuminate\Support\Facades\Artisan;

Route::get('/reset-laravel', function () {
    try {
        Artisan::call('optimize:clear');
        Artisan::call('config:clear');
        Artisan::call('route:clear');
        Artisan::call('view:clear');

        return response()->json([
            'status' => '✅ Success',
            'message' => 'Laravel cache, config, route, and view cleared successfully.'
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => '❌ Error',
            'message' => $e->getMessage()
        ], 500);
    }
});
