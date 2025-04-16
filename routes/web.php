<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// АВТОРИЗАЦИЯ, РЕГИСТРАЦИЯ, СМЕНА ПАРОЛЯ И ВЫХОД
Route::get('/login', [LoginController::class, 'index'])->name('loginForm'); // Авторизация GET
Route::post('/login', [LoginController::class, 'login'])->name('login');      // Авторизация POST

Route::get('/register', [RegisterController::class, 'index'])->name('registerForm'); // Регистрация GET
Route::post('/register', [RegisterController::class, 'register'])->name('register'); // Регистрация POST

Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile'); // Профиль GET

Route::get('/changePassword', [ChangePasswordController::class, 'index'])->name('changePasswordForm');  // Смена пароля GET
Route::post('/changePassword', [ChangePasswordController::class, 'update'])->name('changePassword'); // Смена пароля POST

Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); // Выход POST

//Элементы главной страницы

Route::get('/', [HomeController::class, 'index'])->name('home'); // Главная страница
