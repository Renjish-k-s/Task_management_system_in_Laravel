 <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontEndController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/','FrontEndController@home')->name('home');

Route::get('validate-user','FrontEndController@validateuser')->name('validate.user');
Route::get('create-user','FrontEndController@createuser')->name('create.user');


