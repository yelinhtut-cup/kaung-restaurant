<?php

use App\Http\Controllers\MenuController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\CustomAuthController;

Route::get('/home', [ MenuController::class, 'index'])->name('home'); //home page 

Route::get('/menu/cuisines', [ MenuController::class, 'cuisine_index'])->name('cuisine'); // cuisine page

Route::get('/menu/rice', [ MenuController::class, 'rice_index']); // rice page

Route::get('/menu/cuisine/dashboard', [ MenuController::class, 'test_index']); // cuisine menu dashboard

Route::get('/menu/items/add/index', [ MenuController::class, 'item_index'])->name('cuisine_add'); // index page of adding item to menu

Route::post('/menu/items/add', [ MenuController::class, 'create']); // add item to menu

Route::get('/menu/cuisine/edit/{id}', [ MenuController::class, 'edit']); // form to edit item

Route::post('/menu/cuisine/update', [ MenuController::class, 'update']); // update cuisine item

Route::get('/menu/cuisine/delete/{id}', [ MenuController::class, 'delete']); // delete cuisine item

Route::post('/menu/cuisines/pickup', [ MenuController::class, 'pick_up']); // when pickup save item id to db

Route::post('/menu/cuisines/pickup/comfirm', [ MenuController::class, 'pick_comfirm']); // pickup confirm

Route::get('/menu/cuisine/pickup/all/delete', [ MenuController::class, 'all_pick_delete']); // delete all pickup item

Route::get('/menu/cuisine/pickup/specific/delete/{id}', [ MenuController::class, 'specific_pick_delete']); // delete pickup item by specific id

Route::get('/menu/order/receipt', [ MenuController::class, 'receipt_index']); // to show receipt form

Route::post('/menu/cuisine/receipt/create', [ MenuController::class, 'receipt_create']); // to save receipt data to db

Route::get('/menu/cuisines/admin/order/list', [ MenuController::class, 'see_order_list']); // to view order list

Route::get('/', [ CustomAuthController::class, 'showLoginForm'])->name('login'); //login form

Route::post('/login', [ CustomAuthController::class, 'login']);

Route::post('/logout', [ CustomAuthController::class, 'logout'])->name('logout'); // to logout

Route::get('/register', [ CustomAuthController::class, 'showRegisterForm']); // to show register form

Route::post('/register/store', [ CustomAuthController::class, 'register']); // to register new user

Route::post('/menus/cuisine/category/add', [ MenuController::class, 'category_add']); // to show category adding form

Route::get('/menu/cuisine/category/remove/{id}', [ MenuController::class, 'category_remove']); // to delete menu category