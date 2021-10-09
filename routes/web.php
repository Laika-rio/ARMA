<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::get('/', [PostController::class, 'index'])
    ->name('index');

Route::get('/add_to_data', /* URLがこうだったら */
         [PostController::class, 'add_to_data'] /* ここでfunctionを書かないためにPostControllerのadd_to_data関数を呼び出して、viewの表示を行なっている。 */ )
    ->name('add_to_data'); /* route()でこのRoute定義を呼ぶ名前 */
