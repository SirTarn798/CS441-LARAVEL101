<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtistController;

Route::get('/', function () {
    return redirect()->route('about.index');
});

Route::get('hello', function () {
    return 'Hello World';
})->name('ddx');

Route::get('ELLO/{name}', function ($name) {
    return "Hello ${name}";
})->name('hello.name');

Route::get('ELLO/{name}/{age}', function ($name, $age) {
    return [
        'greeting' => "Hello ${name}",
        'd' => "Your age is ${age}",
    ];
})->name('hello.name.age');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('about', [AboutController::class, 'index'])->name('about.index');

Route::get('songs', [SongController::class, 'index'])->name('songs.index');

Route::get('/artists/{artist}/songs',
    [ArtistController::class, 'createSong']
)->name('artists.songs.create');

Route::resource('/artists', ArtistController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
