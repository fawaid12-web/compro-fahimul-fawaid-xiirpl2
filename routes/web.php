<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\CompanyProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Article;

// 1. Mengarahkan ke CompanyProfileController agar kodingan take(3) berjalan
Route::get('/', [CompanyProfileController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    $articles = Article::latest()->get();
    return view('dashboard', compact('articles'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    // Route Profile User
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // 2. Mendaftarkan Route Resource Company Profile (Menghilangkan Peringatan Error)
    Route::resource('company-profile', CompanyProfileController::class);

    // Route Resource Article
    Route::resource('articles', ArticleController::class);
});

require __DIR__.'/auth.php';
