<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/**
 * Customers
 */

Route::resource('customers', 'Customer\CustomerController', ['only' => ['index', 'show']]);

/**
 * Providers
 */

Route::resource('providers', 'Provider\ProviderController', ['only' => ['index', 'show']]);

/**
 * Invoices
 */

Route::resource('invoices', 'Invoice\InvoiceController', ['only' => ['index', 'show']]);

/**
 * Products
 */

Route::resource('products', 'Product\ProductController', ['only' => ['index', 'show']]);

/**
 * Categories
 */

Route::resource('categories', 'Category\CategoryController', ['except' => ['create', 'edit']]);

/**
 * Payments
 */

Route::resource('payments', 'Payment\PaymentController', ['only' => ['index', 'show']]);

/**
 * Users
 */

Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);
