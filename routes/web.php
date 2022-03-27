<?php

use Illuminate\Support\Facades\Route;
use Amirhossein256\LogActivity\Models\Log;

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

Route::get('/report', function () {
    $data = Log::paginate(10);
    return view('report::log', compact('data'));

});

