<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\VendorController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ClientController;



use App\Http\Middleware\admin;
use App\Http\Middleware\role;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Rolemiddleware;



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

// Route::prefix('admin')->group(function () {
//     Route::get('/login', [AdminController::class, 'index'])->name('login_form');
//     Route::post('/login/owner', [AdminController::class, 'login'])->name('admin.login');

//     Route::get('/dashboard', [AdminController::class, 'Dashboard'])->name('admin.dashboard')->middleware('admin');
//     Route::get('/register', [AdminController::class, 'register'])->name('admin.register');
//     Route::post('/register/create', [AdminController::class, 'register_create'])->name('admin.register.create');

// });




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware('auth','role:admin');
  //  Route::get('admin/post', [PostController::class, 'post'])->middleware('auth','role:admin');
  // routes/web.php

Route::get('admin/analytics', [AdminController::class, 'analytics']);

    
    Route::get('admin/post', [PostController::class, 'post'])->middleware('auth','role:admin')->name('admin.post');
    Route::get('admin/post/create', [PostController::class, 'create'])->middleware('auth','role:admin')->name('admin.postcreate');
    Route::post('admin/post/store', [PostController::class, 'store'])->middleware('auth','role:admin')->name('admin.post.store');
 //   Route::get('admin/post/{post}', [PostController::class, 'show'])->middleware('auth','role:admin')->name('admin.postshow');
    Route::get('admin/post/{post}/edit', [PostController::class, 'edit'])->middleware('auth','role:admin')->name('admin.post.edit');
    Route::put('admin/post/{post}', [PostController::class, 'update'])->middleware('auth','role:admin')->name('admin.post.update');
    Route::get('admin/post/{post}', [PostController::class, 'destroy'])
    ->middleware('auth', 'role:admin')
    ->name('admin.post.delete');
    Route::delete('admin/post/{post}', [PostController::class, 'destroy'])->middleware('auth','role:admin');
    


// AboutUs Routes
Route::get('admin/aboutus', [AboutUsController::class, 'index'])->middleware('auth', 'role:admin')->name('admin.aboutus.index');
Route::get('admin/aboutus/create', [AboutUsController::class, 'create'])->middleware('auth', 'role:admin')->name('admin.aboutus.create');
Route::post('admin/aboutus/store', [AboutUsController::class, 'store'])->middleware('auth', 'role:admin')->name('admin.aboutus.store');
Route::get('admin/aboutus/{aboutUs}/edit', [AboutUsController::class, 'edit'])->middleware('auth', 'role:admin')->name('admin.aboutus.edit');
Route::put('admin/aboutus/{aboutUs}', [AboutUsController::class, 'update'])->middleware('auth', 'role:admin')->name('admin.aboutus.update');
Route::get('admin/aboutus/{aboutUs}', [AboutUsController::class, 'destroy'])
    ->middleware('auth', 'role:admin')
    ->name('admin.aboutus.delete');



// portfolio Routes
Route::get('admin/portfolio', [PortfolioController::class, 'index'])->middleware('auth', 'role:admin')->name('admin.portfolio');
Route::get('admin/portfolio/create', [PortfolioController::class, 'create'])->middleware('auth', 'role:admin')->name('admin.portfolio.create');
Route::post('admin/portfolio/store', [PortfolioController::class, 'store'])->middleware('auth', 'role:admin')->name('admin.portfolio.store');
Route::get('admin/portfolio/{portfolio}/edit', [PortfolioController::class, 'edit'])->middleware('auth', 'role:admin')->name('admin.portfolio.edit');
Route::put('admin/portfolio/{portfolio}', [PortfolioController::class, 'update'])->middleware('auth', 'role:admin')->name('admin.portfolio.update');
Route::get('admin/portfolio/{portfolio}', [PortfolioController::class, 'destroy'])
    ->middleware('auth', 'role:admin')
    ->name('admin.portfolio.delete');

//Services controller
Route::get('admin/services', [ServicesController::class, 'index'])->middleware('auth', 'role:admin')->name('admin.services');
Route::get('admin/services/create', [ServicesController::class, 'create'])->middleware('auth', 'role:admin')->name('admin.services.create');
Route::post('admin/services/store', [ServicesController::class, 'store'])->middleware('auth', 'role:admin')->name('admin.services.store');
Route::get('admin/services/{services}/edit', [ServicesController::class, 'edit'])->middleware('auth', 'role:admin')->name('admin.services.edit');
Route::put('admin/services/{services}', [ServicesController::class, 'update'])->middleware('auth', 'role:admin')->name('admin.services.update');
Route::get('admin/services/{services}', [ServicesController::class, 'destroy'])
    ->middleware('auth', 'role:admin')
    ->name('admin.services.delete');

//Team Controller
Route::get('admin/team', [TeamController::class, 'index'])->middleware('auth', 'role:admin')->name('admin.team');
Route::get('admin/team/create', [TeamController::class, 'create'])->middleware('auth', 'role:admin')->name('admin.team.create');
Route::post('admin/team/store', [TeamController::class, 'store'])->middleware('auth', 'role:admin')->name('admin.team.store');
Route::get('admin/team/{team}/edit', [TeamController::class, 'edit'])->middleware('auth', 'role:admin')->name('admin.team.edit');
Route::put('admin/team/{team}', [TeamController::class, 'update'])->middleware('auth', 'role:admin')->name('admin.team.update');
Route::get('admin/team/{team}', [TeamController::class, 'destroy'])
    ->middleware('auth', 'role:admin')
    ->name('admin.team.delete');


    //Product Controller
Route::get('admin/product', [ProductController::class, 'index'])->middleware('auth', 'role:admin')->name('admin.product');
Route::get('admin/product/create', [ProductController::class, 'create'])->middleware('auth', 'role:admin')->name('admin.product.create');
Route::post('admin/product/store', [ProductController::class, 'store'])->middleware('auth', 'role:admin')->name('admin.product.store');
Route::get('admin/product/{product}/edit', [ProductController::class, 'edit'])->middleware('auth', 'role:admin')->name('admin.product.edit');
Route::put('admin/product/{product}', [ProductController::class, 'update'])->middleware('auth', 'role:admin')->name('admin.product.update');
Route::get('admin/product/{product}', [ProductController::class, 'destroy'])
    ->middleware('auth', 'role:admin')
    ->name('admin.product.delete');

    
// routes/web.php
Route::post('Frontend/cart/add/{product}', [CartController::class, 'add'])->name('Frontend.cart.add');
Route::get('Frontend/cart', [CartController::class, 'index'])->name('Frontend.cart');

// ... other routes ...





        //Client routes
Route::get('admin/client', [ClientController::class, 'index'])->middleware('auth', 'role:admin')->name('admin.client');
Route::get('admin/client/create', [ClientController::class, 'create'])->middleware('auth', 'role:admin')->name('admin.client.create');
Route::post('admin/client/store', [ClientController::class, 'store'])->middleware('auth', 'role:admin')->name('admin.client.store');
Route::get('admin/client/{client}/edit', [ClientController::class, 'edit'])->middleware('auth', 'role:admin')->name('admin.client.edit');
Route::put('admin/client/{client}', [ClientController::class, 'update'])->middleware('auth', 'role:admin')->name('admin.client.update');
Route::get('admin/client/{client}', [ClientController::class, 'destroy'])
    ->middleware('auth', 'role:admin')
    ->name('admin.client.delete');




//frontend routes
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index']);
Route::get('Frontend/home', [FrontendController::class, 'index']);
Route::get('Frontend/aboutus', [FrontendController::class,'aboutus']);
Route::get('Frontend/services', [FrontendController::class, 'services']);
Route::get('Frontend/portfolio', [FrontendController::class, 'portfolio']);
Route::get('Frontend/product', [FrontendController::class, 'product']);
Route::get('Frontend/team', [FrontendController::class, 'team']);


Route::get('Frontend/blog', [FrontendController::class,'blog'])->name('Frontend.blog');
Route::get('Frontend/blog/{post}', [FrontendController::class, 'show'])->name('Frontend.blog.show');



   

    Route::get('vendor/dashboard', [VendorController::class, 'dashboard'])->middleware('auth','role:vendor');


require __DIR__.'/auth.php';

