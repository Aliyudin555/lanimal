<?php

use App\Http\Middleware\Admin;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AnimalController;
use App\Http\Controllers\BearChildController;
use App\Http\Controllers\CatChildController;
use App\Http\Controllers\HariamuChildController;
use App\Http\Controllers\DolpinChildController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DogChildController;
use App\Http\Controllers\ElephantChildController;
use App\Http\Controllers\GiraffeChildController;
use App\Http\Controllers\HawkChildController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorseChildController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MonkeyChlidController;
use App\Http\Controllers\NemoChildController;
use App\Http\Controllers\PausChildController;
use App\Http\Controllers\PenguinChildController;
use App\Http\Controllers\PigChildController;
use App\Http\Controllers\SharkChildController;
use App\Http\Controllers\SnakeChildController;
use App\Http\Controllers\WolfChildController;
use App\Http\Controllers\ZebrasChildController;
use Illuminate\Support\Facades\Route;
// use
Route::get('/login', [LoginController::class, 'login'])->name('login')->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'loginuser'])->name('mylogin');
Route::post('/logout',  [LoginController::class, 'logout'])->name('logout');
Route::get('/', function () {
    return redirect('/login');
});

Route::middleware(['auth'])->group(function () {
Route::get('/home', [HomeController::class, 'index']);
Route::get('/animal', [AnimalController::class, 'index'])->name('animal');
Route::get('/about', [AboutController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);

// detail
Route::get('/animal/harimau', [HariamuChildController::class, 'index'])->name('harimau.detail');
Route::get('/animal/dolpin', [DolpinChildController::class, 'index'])->name('dolpin.detail');
Route::get('/animal/beruang', [BearChildController::class, 'index'])->name('bear.detail');
Route::get('/animal/penguin', [PenguinChildController::class, 'index'])->name('penguin.detail');
Route::get('/animal/zebras', [ZebrasChildController::class, 'index'])->name('zebras.detail');
Route::get('/animal/monkey', [MonkeyChlidController::class, 'index'])->name('monkey.detail');
Route::get('/animal/horse', [HorseChildController::class, 'index'])->name('horse.detail');
Route::get('/animal/paus', [PausChildController::class, 'index'])->name('paus.detail');
Route::get('/animal/shark', [SharkChildController::class, 'index'])->name('shrak.detail');
Route::get('/animal/snake', [SnakeChildController::class, 'index'])->name('snake.detail');
Route::get('/animal/hawk', [HawkChildController::class, 'index'])->name('hawk.detail');
Route::get('/animal/wolf', [WolfChildController::class, 'index'])->name('wolf.detail');
Route::get('/animal/elephant', [ElephantChildController::class, 'index'])->name('elephant.detail');
Route::get('/animal/giraffe', [GiraffeChildController::class, 'index'])->name('giraffe.detail');
Route::get('/animal/cat', [CatChildController::class, 'index'])->name('cat.detail');
Route::get('/animal/nemo', [NemoChildController::class, 'index'])->name('nemo.detail');
Route::get('/animal/pig', [PigChildController::class, 'index'])->name('pig.detail');
Route::get('/animal/dog', [DogChildController::class, 'index'])->name('dog.detail');
});





// Route::get('/posts', function () {
//     return view('posts');
// });

// Route::get('/animals', function () {
//     return view('animals');
// });



// Route::get('/about', function () {
//     return view('about');
// });

// Route::get('/contact', function () {
//     return view('contact');
// });


