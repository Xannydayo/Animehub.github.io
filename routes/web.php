    <?php

use App\Http\Controllers\AllController;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

// PAGE
Route::get('/', [AllController::class, 'login']);
Route::get('/index', [AllController::class, 'index']);
Route::get('/anime/detail', [AllController::class, 'animeDetail']);
Route::get('/blog', [AllController::class, 'blog']);
Route::get('/blog/detail', [AllController::class, 'blogDetail']);
Route::get('/categories', [AllController::class, 'categories']);
Route::get('/main', [AllController::class, 'main']);
Route::get('/watching', [AllController::class, 'watching']);
// AUTH PAGE
Route::get('/watchings', [AllController::class, 'watchings']);
Route::get('/watchingss', [AllController::class, 'watchingss']);
Route::get('/login', [AllController::class, 'login']);
Route::get('/signup', [AllController::class, 'signup']);
// AUTH PROCESS
Route::post('/login', [AllController::class, 'loginProcess'])->name('login.process');
Route::post('/signup/process', [AllController::class, 'signupProcess']);

Route::post('/index', function () {
    return view('index');
})->name('home');