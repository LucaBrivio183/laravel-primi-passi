<?php

use Dflydev\DotAccessData\Data;
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

Route::get('/', function () {

    $data = [
        'title' => 'Hello World'
    ];

    return view('index', $data);
});


Route::get('/about', function () {
    $data = [
        'title' => 'About us',
        'about_text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, error non dicta necessitatibus quis ab excepturi officia hic accusantium repudiandae nisi accusamus laudantium sint beatae saepe nam alias maiores! Unde.'
    ];
    return view('about', $data);
});

Route::get('/info', function () {
    $data = [
        'title' => 'Useful Information',
        'info_text' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae, error non dicta necessitatibus quis ab excepturi officia hic accusantium repudiandae nisi accusamus laudantium sint beatae saepe nam alias maiores! Unde.'
    ];
    return view('info', $data);
});
