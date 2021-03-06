<?php

use App\Http\Controllers\Amin\CategoryController;
use App\Http\Controllers\Amin\ContactController;
use App\Http\Controllers\Amin\PostController;
use App\Http\Controllers\Amin\UserController;
use App\Http\Controllers\Web\UserControllers;
use App\Http\Controllers\Web\AuthController as WebAuthController;
use App\Http\Controllers\Amin\AuthController;
use App\Http\Controllers\Amin\ProductController;
use App\Http\Controllers\Web\WebController;
use Illuminate\Support\Facades\Route;
use Illuminate\Routing\Router;
use App\Http\Controllers\Web\CartController;



Route::prefix('admin')->group(function() {
    Route::get('login', [AuthController::class, 'login'])
        ->name('admin.auth.login');

    Route::post('login', [AuthController::class, 'checkLogin'])
        ->name('admin.auth.check-login');
});

Route::prefix('admin')->middleware('admin.login')->group(function() {

    Route::get('logout', [AuthController::class, 'logout'])
        ->name('admin.logout');
    Route::get('profile', [AuthController::class, 'profile'])
        ->name('admin.profile.index');
    Route::put('profile', [AuthController::class, 'updateProfile'])
        ->name('admin.profile.update');

    Route::prefix('category')->group(function() {
        Route::get('', [CategoryController::class, 'index'])
            ->name('admin.category.index');

        Route::get('create', [CategoryController::class, 'create'])
            ->name('admin.category.create');

        Route::post('store', [CategoryController::class, 'store'])
            ->name('admin.category.store');

        Route::get('edit/{id}', [CategoryController::class, 'edit'])
            ->name('admin.category.edit');

        Route::put('update/{id}', [CategoryController::class, 'update'])
            ->name('admin.category.update');

        Route::get('delete/{id}', [CategoryController::class, 'delete'])
            ->name('admin.category.delete');
    });

    Route::prefix('post')->group(function() {
        Route::get('', [PostController::class, 'index'])
            ->name('admin.post.index');

        Route::get('create', [PostController::class, 'create'])
            ->name('admin.post.create');

        Route::post('store', [PostController::class, 'store'])
            ->name('admin.post.store');

        Route::get('edit/{id}', [PostController::class, 'edit'])
            ->name('admin.post.edit');

        Route::put('update/{id}', [PostController::class, 'update'])
            ->name('admin.post.update');

        Route::get('delete/{id}', [PostController::class, 'delete'])
            ->name('admin.post.delete');
    });


    // Product
    Route::prefix('product')->group(function() {
        Route::get('', [ProductController::class, 'index'])
        ->name('admin.product.listProduct');

        Route::get('create', [ProductController::class, 'create'])
            ->name('admin.product.createProduct');

        Route::post('store', [ProductController::class, 'store'])
            ->name('admin.product.storeProduct');

        Route::get('edit/{id}', [ProductController::class, 'edit'])
            ->name('admin.product.editProduct');

        Route::put('update/{id}', [ProductController::class, 'update'])
            ->name('admin.product.updateProduct');

        Route::get('delete/{id}', [ProductController::class, 'delete'])
            ->name('admin.product.deleteProduct');
    });

    Route::prefix('contact')->group(function() {
        Route::get('', [ContactController::class, 'index'])
            ->name('admin.contact.index');

        Route::get('delete/{id}', [ContactController::class, 'delete'])
            ->name('admin.contact.delete');
    });

    Route::prefix('user')->group(function() {
        Route::get('', [UserController::class, 'index'])
            ->name('admin.user.index');

        Route::get('create', [UserController::class, 'create'])
            ->name('admin.user.create');

        Route::post('store', [UserController::class, 'store'])
            ->name('admin.user.store');

        Route::get('edit/{id}', [UserController::class, 'edit'])
            ->name('admin.user.edit');

        Route::put('update/{id}', [UserController::class, 'update'])
            ->name('admin.user.update');

        Route::get('delete/{id}', [UserController::class, 'delete'])
            ->name('admin.user.delete');
    });
});

Route::get('/', [WebController::class, 'home']);

Route::get('category', [WebController::class, 'category']);
Route::get('category/{slug}', [WebController::class, 'categorySlug'])
    ->name('web.category');
Route::get('post/{slug}', [WebController::class, 'post'])
    ->name('web.post');
Route::post('post/comment/{id}', [WebController::class, 'comment'])
    ->name('web.post.comment');
Route::get('contact', [WebController::class, 'contact'])
    ->name('web.contact');
Route::get('thongke', [WebController::class, 'thongke'])
    ->name('web.thongke');
Route::post('contact', [WebController::class, 'sendContact'])
    ->name('web.contact.store');


Route::get('login', [WebAuthController::class, 'formLogin']);
Route::post('login', [WebAuthController::class, 'login'])
    ->name('web.auth.login');

Route::get('register', [WebAuthController::class, 'register']);
Route::post('register', [WebAuthController::class, 'store'])
    ->name('web.auth.store');


Route::get('logout', [WebAuthController::class, 'logout']);

Route::get('forgot-password', [WebAuthController::class, 'forgotPassword']);
Route::post('send-mail-forgot-password', [WebAuthController::class, 'sendMail'])
    ->name('send-mail');
Route::get('reset-password', [WebAuthController::class, 'formReset'])->name('form-reset');
Route::post('reset-password', [WebAuthController::class, 'resetPassword'])->name('reset-password');


Route::get('shopping', [CartController::class, 'showIndexShop'])
    ->name('web.shop');

Route::get('/Add-Cart/{id}', [CartController::class, 'AddCart']);
Route::get('/Delete-Item-Cart/{id}', [CartController::class, 'deleteItemCart']);

Route::get('list-cart', [CartController::class,'listCart']);
Route::get('/Delete-Item-List-Cart/{id}', [CartController::class, 'deleteListItemCart']);

Route::get('/save-Item-List-Cart/{id}/{quanty}', [CartController::class, 'saveListItemCart']);
