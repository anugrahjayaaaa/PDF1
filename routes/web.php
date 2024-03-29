<?php

use App\Http\Controllers\FormulirController;
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
    // $pdf = PDF::loadView('index');
    // return $pdf->download('invoice.pdf');

    return view('index');
});

Route::get('/test', 'FormulirController@formIndex');

// Route::get('/test',function(){
//     return view('test',['name'=>'a1']);
// });

Route::post('/pdf','FormulirController@printPDF');
