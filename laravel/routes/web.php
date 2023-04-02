<?php
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\UserController;
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
Route::get('/edit',[HomeController::class,'edit'])->middleware(['auth'])->name('edit');
Route::post('/{user}/update',[HomeController::class, 'update'])->middleware(['auth'])->name('user.update');

Route::get('/team',[TeamController::class,'index'])->middleware(['auth'])->name('team');


Route::resource('/team',TeamController::class)
->middleware(['auth'])->except(['index']);

//Route::get('/article',[ArticleController::class,'index'])->middleware(['auth'])->name('article');

Route::prefix('/teams')->
    middleware('auth')->group(function(){
Route::get('/{team}/index', [TeamController::class,'article'])->name('article.index');
Route::get('/{team}/create', [ArticleController::class, 'create'])->name('article.create');
Route::post('/{team}/store',[ArticleController::class, 'store'])->name('article.store');
Route::put('/{team}/join',[TeamController::class,'join'])->name('team.join');
Route::delete('/{team}/join',[TeamController::class,'exit'])->name('team.exit');
});

Route::prefix('/users')->
    middleware(['auth'])->group(function(){

Route::get('/{name}',[UserController::class, 'show'])->name('user.show');

Route::put('/{name}/follow',[UserController::class, 'follow'])->name('user.follow');
Route::delete('/{name}/follow', [UserController::class, 'unfollow'])->name('user.unfollow');
//{name}に入るのはフォローあるいはフォロー解除される側
});




Route::prefix('/articles')->name('article.')->middleware(['auth'])->group(function(){

    Route::get('/{article}/show',[ArticleController::class, 'show'])->name('show');
    Route::post('/{article}/comment',[CommentController::class, 'comment'])->name('comment');
    Route::get('/{article}/edit',[ArticleController::class, 'edit'])->name('edit');
    Route::put('/{article}/team/{team}/update',[ArticleController::class, 'update'])->name('update');
    Route::delete('/{article}/team/{team}/destroy',[ArticleController::class, 'destroy'])->name('destroy');
    Route::put('/{article}/like',[ArticleController::class, 'like'])->name('like');
    Route::delete('/{article}/like',[ArticleController::class, 'unlike'])->name('unlike');

});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


require __DIR__.'/auth.php';
