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
Route::post('/admin/user/create', [Controller\Admin\AdminController::class, 'createUser'])->name('admin.user.create');
Route::post('/admin/user/update', [Controller\Admin\AdminController::class, 'createUser'])->name('admin.user.update');
Route::post('/admin/user/delete', [Controller\Admin\AdminController::class, 'deleteUser'])->name('admin.user.delete');

Route::get('/integration/payment', [Controller\Integration\PaymentIntegrationController::class, 'paymentIntegration'])->name('user.integrations.payment');
Route::post('/integration/payment/create', [Controller\Integration\PaymentIntegrationController::class, 'createPaymentIntegration'])->name('user.integrations.create');
Route::post('/integration/payment/update', [Controller\Integration\PaymentIntegrationController::class, 'updatePaymentIntegration'])->name('user.integrations.update');
Route::post('/integration/payment/delete', [Controller\Integration\PaymentIntegrationController::class, 'deletePaymentIntegration'])->name('user.integrations.delete');

Route::get('/store/items', [Controller\Store\StoreController::class, 'itemLists'])->name('user.store.items');
Route::post('/admin/product/add', [Controller\Store\StoreController::class, 'addProductToStore'])->name('user.store.create');
Route::get('/admin/product/{productId}', [Controller\Store\StoreController::class, 'productDetails'])->name('user.store.details');

Route::get('/product/payment', [Controller\Store\StoreController::class, 'payment'])->name('product.payment');
Route::post('/product/stripe/payment', [Controller\Payment\StripeController::class, 'makePayment'])->name('user.payment.stripe');


