<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Auth\ProfileController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\NewProductController;
use App\Http\Controllers\Auth\ChangePasswordController;

// АВТОРИЗАЦИЯ, РЕГИСТРАЦИЯ, СМЕНА ПАРОЛЯ И ВЫХОД

Route::get('/login', [LoginController::class, 'index'])->name('loginForm'); // Авторизация GET
Route::post('/login', [LoginController::class, 'login'])->name('login');    // Авторизация POST

Route::get('/register', [RegisterController::class, 'index'])->name('registerForm'); // Регистрация GET
Route::post('/register', [RegisterController::class, 'register'])->name('register'); // Регистрация POST

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile'); // Профиль GET

    Route::get('/changePassword', [ChangePasswordController::class, 'index'])->name('changePasswordForm'); // Смена пароля GET
    Route::post('/changePassword', [ChangePasswordController::class, 'update'])->name('changePassword');   // Смена пароля POST

    Route::get('/logout', [LoginController::class, 'logout'])->name('logout'); // Выход get
});

// АДМИН-ПАНЕЛЬ: СОЗДАНИЕ, ИЗМЕНЕНИЕ И УДАЛЕНИЕ ТОВАРОВ

Route::middleware(['admin'])->group(function() {
    Route::get('/admin-panel', [AdminController::class, 'index'])->name('admin.panel'); // Страница админ-панели GET


    Route::get('admin-panel/all-products', [ProductController::class, 'index'])->name('admin.allProduct'); // Страница отображения всех товаров в базе данных GET

    Route::get('/admin-panel/new-product', [NewProductController::class, 'index'])->name('admin.createProduct.index'); // Страница выбора категории для создания нового товара GET
    Route::get('/admin-panel/new-product/{type}', [NewProductController::class, 'show'])->name('admin.createProduct.show'); // Страница для создания товара по определенной категории GET
    Route::post('/admin-panel/new-product/{type}', [NewProductController::class, 'create'])->name('admin.createProduct.create'); // Страница для создания товара по определенной категории POST
});

// ГЛАВНАЯ СТРАНИЦА, СТРАНИЦА КАТАЛОГА, СТРАНИЦА ТОВАРОВ, СТРАНИЦА ПРОСМОТРА ТОВАРА

Route::get('/', [HomeController::class, 'index'])->name('index'); // Главная страница GET

Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog'); //Страница каталога GET

Route::get('/catalog/{type}', [CatalogController::class, 'show'])->name('allProducts'); //Страница товаров GET

Route::get('/catalog/{type}/{id}', [CatalogController::class, 'showProduct'])->name('showProduct'); //Страница карточки товара GET
