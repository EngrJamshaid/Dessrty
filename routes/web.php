<?php

use App\Http\Controllers\AccessoryController;
use App\Http\Controllers\Admin\AccessoriesController;
use App\Http\Controllers\Admin\AccessoryCategoryController;
use App\Http\Controllers\Admin\CakeController;
use App\Http\Controllers\Admin\CategoryController as AdminCategoryController;
use App\Http\Controllers\Admin\FillingController;
use App\Http\Controllers\Admin\FlavourController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|---------------------------
| FRONTEND ROUTES
|---------------------------
*/

Route::get('/', [CategoryController::class, 'showAllCategory']);
Route::get('/category/{id}/cakes', [CategoryController::class, 'showCakes']);


Route::get('/showass', [AccessoryController::class, 'showAss'])->name('contniushop');
Route::get('/accessories/{id}', [AccessoryController::class, 'showcat']);

/*
|---------------------------
| ADMIN ROUTES
|---------------------------
*/

Route::prefix('admin')->middleware('admin')->group(function () {
      Route::get('/dashboard', function () {
        return view('admin.dashboard');
    });

    Route::resource('categories', AdminCategoryController::class);
    Route::resource('cakes', CakeController::class);
    Route::resource('flavours', FlavourController::class);
    Route::resource('fillings', FillingController::class);
    Route::resource('accessory-categories', AccessoryCategoryController::class);
    Route::resource('accessories', AccessoriesController::class);

});


Route::get('/shopingcart', function () {
    return view('shopingcart');
});


Route::post('/addtocart', [CartController::class, 'addToCart'])
    ->name('addcart');

Route::get('/cart', [CartController::class, 'cart'])
    ->name('cart');

Route::post('/cart/update/{id}', [CartController::class, 'updateCart'])
    ->name('cart.update');
Route::get('/cart/remove/{id}', [CartController::class, 'removeCart'])
    ->name('cart.remove');


Route::get('/search', [ProductController::class, 'search'])
    ->name('search');

Route::get('/companyabout', function () {
    return view('company.about');
})->name('companyabout');

Route::get('/companytraining', function () {
    return view('company.tranning');
})->name('companytraining');

Route::get('/companycareer', function () {
    return view('company.career');
})->name('companycareer');

Route::get('/companyblog', function () {
    return view('company.blog');
})->name('companyblog');

Route::get('/accountprofile', function () {
    return view('account.profile');
})->middleware('auth')->name('profile');




Route::get('/register', function () {
    return view('account.register');
})->name('register');

Route::post('/register-user', [UserController::class, 'register'])
    ->name('register.user');


Route::get('/login', function () {
    return view('account.login');
})->name('login');

Route::post('/login-user', [UserController::class, 'login'])
    ->name('login.user');


    Route::fallback(function () {
    return response()->view('notfound', [], 404);
});



// hadrdocde admin login


/* ======================
   LOGIN PAGE
====================== */
Route::get('/admin/login', function () {
    return view('admin.login');
});

/* ======================
   LOGIN CHECK
====================== */
Route::post('/admin/login', function (Request $request) {

    if ($request->username === 'jmdadmin' && $request->password === 'jmd2904') {

        session(['admin_logged_in' => true]);

        return redirect('/admin/dashboard');
    }

    return back()->with('error', 'Invalid username or password');
});

/* ======================
   LOGOUT
====================== */
Route::get('/logout', function () {
    session()->forget('admin_logged_in');
    return redirect('/Adminlogin');
});
