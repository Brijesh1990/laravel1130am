<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\ContactController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/',function(){
//      return view('aboutus');
// });

// blogs file load here

// Route::get('/', function () {
//      return view('welcome');
//  });
// blogs template home page routing
Route::get('/',[BlogsController::class,'index']);
// blogs templates contact us page routing
Route::get('/contact-us',[ContactController::class,'index']);

