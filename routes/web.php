<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers as Controller;
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



Route::get('/login', [Controller\Auth\LoginController::class, 'loginView'])->name('login');
Route::post('/login', [Controller\Auth\LoginController::class, 'login'])->name('auth.login.account');
Route::get('/logout', [Controller\Auth\LoginController::class, 'logout'])->name('auth.logout');
Route::get('/', [Controller\UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('/admin', [Controller\Admin\AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/usermanagement', [Controller\Admin\AdminController::class, 'userManagement'])->name('admin.usermanagement');
Route::get('/admin/user/create', [Controller\Admin\AdminController::class, 'createUser'])->name('admin.user.create');

Route::get('/integration/payment', [Controller\Integration\PaymentIntegrationController::class, 'paymentIntegration'])->name('user.integrations.payment');
Route::post('/integration/payment/create', [Controller\Integration\PaymentIntegrationController::class, 'createPaymentIntegration'])->name('user.integrations.create');

Route::get('/store/items', [Controller\Store\StoreController::class, 'itemLists'])->name('user.store');
Route::post('/store/product/create', [Controller\Store\StoreController::class, 'addProductToStore'])->name('user.store.create');


