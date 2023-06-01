<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\PiecesController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;


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

Route::get('pieces', [PiecesController::class, 'store'])->name('piece.store');
Route::get('pieces/{piece}', [PiecesController::class, 'update'])->name('piece.update');
Route::get('addPieces', [PiecesController::class, 'addPiece'])->name('piece.addPiece');
Route::get('editPieces/{id}', [PiecesController::class, 'editPiece'])->name('piece.editPiece');
Route::get('show-piece/{id}', [PiecesController::class, 'show'])->name('piece.show-piece');
Route::get('search', [PiecesController::class, 'search'])->name('piece.search');
Route::get('filter', [PiecesController::class, 'filter'])->name('piece.filter');
Route::get('filterCategory/{id}', [PiecesController::class, 'filterCategory'])->name('category.filterCategory');

Route::get('searchBar', function () {
    return view('testSearch');
})->name('searchBar');



Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ],
    function () {

        Route::get('en/', function () {
            return view('index');
        })->name('index');

        Route::get('en/dashboard', function () {
            return view('dashboard');
        });

        Route::get('account-login', function () {
            return view('account-login');
        })->name('account-login');

        Route::get('en/account-register', function () {
            return view('auth.register');
        })->name('account-register');
       
        Route::get('/contact-us-v1', function () {
            return view('contact-us-v1');
        })->name('contact-us-v1');

        Route::get('about-us', function () {
            return view('about-us');
        })->name('about-us');

        Route::get('en/account-dashboard', function () {
            return view('account-dashboard');
        })->name('account-dashboard');

        Route::get('en/my-pieces', function () {
            return view('my-pieces');
        })->name('my-pieces');

        Route::get('en/wishlist', function () {
            return view('wishlist');
        })->name('wishlist');

        Route::get('/', function () {
            return view('index');
        });

        Route::get('shop', function () {
            return view('shop');
        })->name("shop");

        Route::get('order_success', function () {
            return view('order_success');
        })->name("order_success");

        Route::get('en/checkout', function () {
            return view('checkout');
        })->name("checkout");

        Route::get('produit', function () {
            return view('produit');
        })->name("produit");

        Route::get('en/contact', function () {
            return view('contact');
        })->name('contact');

        Route::get('account-addresses', function () {
            return view('account-addresses');
        })->name('account-addresses');

        Route::get('account-edit-address', function () {
            return view('account-edit-address');
        })->name("account-edit-address");

        Route::get('account-garage', function () {
            return view('account-garage');
        })->name("account-garage");

        Route::get('account-order-details', function () {
            return view('account-order-details');
        })->name("account-order-details");

        Route::get('account-orders', function () {
            return view('account-orders');
        })->name("account-orders");

        Route::get('account-password', function () {
            return view('account-password');
        })->name("account-password");

        // Route::get('en/account-profile', function () {
        //     return view('profile.edit');
        // })->name("account-profile");

        Route::get('cart', function () {
            return view('cart');
        })->name("cart");

        Route::get('track_order', function () {
            return view('track_order');
        })->name('track_order');

        Route::get('en/brands', function () {
            return view('dashboard-brands');
        })->name('brands');

        Route::get('home', function () {
            return view('index');
        })->name('home');
       
    }
);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
