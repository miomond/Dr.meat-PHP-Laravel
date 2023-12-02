<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController; //add ProductController
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProducController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\MeatController;
use App\Models\Product;
use App\Models\Voucher;
use App\Models\User;

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
// Route::get('/', function () {
//    return view('welcome');
// });

// Route::get('product', 'ProductController@index')->name('index');
// Route::get('/create', 'ProductController@create')->name('create');
// Route::post('store/', 'ProductController@store')->name('store');
// Route::get('show/{product}', 'ProductController@show')->name('show');
// Route::get('edit/{product}', 'ProductController@edit')->name('edit');
// Route::put('edit/{product}','ProductController@update')->name('update');
// Route::delete('/{product}','ProductController@destroy')->name('destroy');

Route::resource("/Product", ProductController::class);
Route::get('/Product/{id}',  'App/Http/Controllers/ProductController@show')->name('Product.show');


    Route::get('/dashboard', function () {

        return view('Product.dashboard',[
            'products'=> Product::orderBy('created_at')->limit(10)->get()
            ,'users'=> User::orderBy('created_at')->limit(10)->get()
        ]);

    });























Route::get('/', function () {
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});
// Route::controller(SampleController::class)->group(function(){

//     Route::get('login', 'index')->name('login');

//     Route::get('registration', 'registration')->name('registration');

//     Route::get('logout', 'logout')->name('logout');

//     Route::post('validate_registration', 'validate_registration')->name('sample.validate_registration');

//     Route::post('validate_login', 'validate_login')->name('sample.validate_login');

//     Route::get('dashboard', 'dashboard')->name('dashboard');

// });




Route::get('aboutus', function () {
    return view('aboutUs');
});
Route::get('contactus', function () {
    return view('contact_us');
});


Route::get('pro', function () {
    return view('product',[
        'product'=> Product::all()
    ]);
});

Route::get('home', function () {
    return view('welcome');
})->name('home');




Route::get('/registerForm', [GuestController::class, 'registerForm'])->name('registerForm');
Route::post('/register', [GuestController::class, 'register'])->name('register');
Route::get('/loginForm', [GuestController::class, 'loginForm'])->name('loginForm');
Route::post('/login', [GuestController::class, 'login'])->name('login');
Route::get('aboutUs', function () {
    return view('aboutUs');
});
Route::get('contactUS', function () {
    return view('contact_us');
});

// Protected routes

    // Route::get('/products', [ProductController::class, 'index']);
    // Route::post('/vouchers/generate', [VoucherController::class, 'generate']);
    // Route::post('/cart/add', [ProductController::class, 'addToCart']);
    // Route::get('/cart', [ProductController::class, 'getCartContents']);
    // Route::post('/cart/update-quantity', [ProductController::class, 'updateCartQuantity']);
    // Route::post('/cart/remove', [ProductController::class, 'removeFromCart']);
    // Route::put('/user/profile', [UserController::class, 'update']);


    // Admin routes
    // Route::get('/dashbord/index', function () {
    //     return view('dashboard.index',[
    //         'trip'=> Product::orderBy('created_at')->limit(10)->get()
    //         ,'users'=> User::orderBy('created_at')->limit(10)->get(),
    //         'vouchers'=>Voucher::orderBy('created_at')->limit(10)->get()
    //     ]);
    // });
    // Route::get('/dashbord/create', function () {
    //     return view('dashboard.create');
    // });
    // Route::post('/store', [DashboardController::class]);
    // Route::get('/dashboard', 'DashboardController@index');
    // Route::get('/dashboard/create', 'DashboardController@create');
    // Route::post('/dashboard', 'DashboardController@store');




    // Dashboard index page
// Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');

// // Dashboard product creation form


// // Dashboard product store route
// Route::post('/produc/store', [DashboardController::class, 'store']);
// Route::resource("/dashboard", DashboardController::class);



//         // Route::get('/dashboard/products/{product}', [DashboardController::class, 'show']);
//        // Dashboard product edit form
// Route::get('/dashboard/products/{product}/edit', [DashboardController::class, 'edit'])->name('dashboard.product.edit');

// // Dashboard product update route
// Route::put('/dashboard/products/{product}', [DashboardController::class, 'update'])->name('dashboard.product.update');

//         Route::delete('/dashboard/products/{product}', [DashboardController::class, 'destroy']);








Route::get('/Meat', [MeatController::class, 'index']);






Route::get('/shopping-cart', [MeatController::class, 'meatCart'])->name('shopping.cart');
Route::get('/Meat/{id}', [MeatController::class, 'addMeattoCart'])->name('addmeat.to.cart');
Route::patch('/update-shopping-cart', [MeatController::class, 'updateCart'])->name('update.sopping.cart');
Route::delete('/delete-cart-product', [MeatController::class, 'deleteMeat'])->name('delete.cart.product');
// Route::get('/index', 'ProducController@index')->name('index');
// Route::get('/create', 'ProducController@create')->name('create');
// Route::post('store/', 'ProducController@store')->name('store');
// Route::get('show/{product}', 'ProducController@show')->name('show');
// Route::get('edit/{product}', 'ProducController@edit')->name('edit');
// Route::put('edit/{product}','ProducController@update')->name('update');
// Route::delete('/index/{product}','ProducController@destroy')->name('destroy');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
