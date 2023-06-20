<?php

use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\MainController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/greeting/{locale}', function (string $locale, \Illuminate\Support\Facades\Request $request) {
        if (! in_array($locale, ['en', 'ru', 'kk'])) {
            abort(400);
        }

        session()->put('locale', $locale);
        app()->setLocale($locale);

        return back();
    })->name('locale');
    Route::get('/', [PagesController::class, 'home'])->name('home');
    Route::get('/catalog', [PagesController::class, 'catalog'])->name('catalog');
    Route::get('/catalog/{alias}', [PagesController::class, 'products'])->name('products');
    Route::get('/catalog/{alias}/{product}', [PagesController::class, 'product'])->name('product');
    Route::get('/about', [PagesController::class, 'about'])->name('about');
    Route::get('/contacts', [PagesController::class, 'contacts'])->name('contacts');
});


Route::get('admin/login', [MainController::class, 'login'])->name('login');
Route::post('/login', [MainController::class, 'auth'])->name('loginPost');

Route::middleware(['auth'])->prefix('admin')->group(function () {
    Route::get('/', [MainController::class, 'index'])->name('admin.main');

    Route::group(['prefix' => 'categories'], function () {
        Route::get('/', [CategoryController::class, 'index',])->name('admin.categories.index');
        Route::get('/status/update', [CategoryController::class, 'updateStatus']);
        Route::get('/create', [CategoryController::class, 'create',])->name('admin.categories.create');
        Route::post('/', [CategoryController::class, 'store'])->name('admin.categories.store');
        Route::get('/{categories}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
        Route::put('/{categories}', [CategoryController::class, 'update'])->name('admin.categories.update');
        Route::delete('/{categories}', [CategoryController::class, 'destroy'])->name('admin.categories.delete');
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', [ProductController::class, 'index',])->name('admin.products.index');
        Route::get('/status/update', [ProductController::class, 'updateStatus']);
        Route::get('/create', [ProductController::class, 'create',])->name('admin.products.create');
        Route::post('/', [ProductController::class, 'store'])->name('admin.products.store');
        Route::get('/{categories}/edit', [ProductController::class, 'edit'])->name('admin.products.edit');
        Route::put('/{categories}', [ProductController::class, 'update'])->name('admin.products.update');
        Route::delete('/{categories}', [ProductController::class, 'destroy'])->name('admin.products.delete');
    });
});
