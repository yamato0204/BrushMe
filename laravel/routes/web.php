<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
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
    return view('welcome');
});




/*Route::get('/test', function(){
    return view('test');
});
*/


Route::get('/home',[HomeController::class,'index'])->middleware(['auth'])->name('home');

Route::get('/team',[TeamController::class,'index'])->middleware(['auth'])->name('team');

Route::get('/article',[ArticleController::class,'index'])->middleware(['auth'])->name('article');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
