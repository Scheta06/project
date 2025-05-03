<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ChangePasswordController;

// АВТОРИЗАЦИЯ, РЕГИСТРАЦИЯ, СМЕНА ПАРОЛЯ И ВЫХОД

Route::get('/login', [LoginController::class, 'index'])->name('loginForm'); // Авторизация GET
Route::post('/login', [LoginController::class, 'login'])->name('login');    // Авторизация POST

Route::get('/register', [RegisterController::class, 'index'])->name('registerForm'); // Регистрация GET
Route::post('/register', [RegisterController::class, 'register'])->name('register'); // Регистрация POST

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile'); // Профиль GET

    Route::get('/changePassword', [ChangePasswordController::class, 'index'])->name('changePasswordForm'); // Смена пароля GET
    Route::post('/changePassword', [ChangePasswordController::class, 'update'])->name('changePassword');   // Смена пароля POST

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); // Выход get
});

// ГЛАВНАЯ СТРАНИЦА, СТРАНИЦА КАТАЛОГА, СТРАНИЦА ТОВАРОВ, СТРАНИЦА ПРОСМОТРА ТОВАРА

Route::get('/', [HomeController::class, 'index'])->name('index'); // Главная страница

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog'); //Страница каталога

Route::get('/catalog/{type}', [CatalogController::class, 'show'])->name('allProducts'); //Страница товаров

Route::get('/catalog/{type}/{id}', [CatalogController::class, 'showProduct'])->name('showProduct'); //Страница карточки товара
