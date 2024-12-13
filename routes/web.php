<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\TemplateController;


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

// Route::get('/', function () {
//     return view('home');
// });

route::get('/', [TemplateController::class, 'index']);
route::get('/about', [TemplateController::class, 'about']);
route::get('/service', [TemplateController::class, 'service']);
route::get('/yourvisa', [TemplateController::class, 'yourvisa']);
route::get('/cart', [TemplateController::class, 'cart']);
route::get('/payment', [TemplateController::class, 'payment']);
route::get('/contact', [TemplateController::class, 'contact']);
route::get('/read_more/{id}', [TemplateController::class, 'read_more']);
route::post('/book_now/{id}', [TemplateController::class, 'book_now']);
route::get('/remove_visa/{id}', [TemplateController::class, 'remove_visa']);
route::get('/order', [TemplateController::class, 'order']);
route::get('/visa_category', [AdminController::class, 'visa_category']);
route::get('/show_clients', [AdminController::class, 'show_clients']);
route::get('/delete_clients/{id}', [AdminController::class, 'delete_clients']);
route::get('/orderdetails', [AdminController::class, 'orderdetails']);
route::post('/add_visa_category', [AdminController::class, 'add_visa_category']);
route::get('/delete_visa_category/{id}', [AdminController::class, 'delete_visa_category']);
route::get('/new_product', [AdminController::class, 'new_product']);
route::post('/add_new_product', [AdminController::class, 'add_new_product']);
route::get('/display_product', [AdminController::class, 'display_product']);
route::get('/delete_product/{id}', [AdminController::class, 'delete_product']);
route::get('/edit_product/{id}', [AdminController::class, 'edit_product']);
route::post('/edit_product_details/{id}', [AdminController::class, 'edit_product_details']);


Route::middleware('admin:admin')->group(function (){
    Route::get('admin/login',[AdminController::class, 'loginForm']);
    Route::post('admin/login',[AdminController::class, 'store'])->name('admin.login');
});

Route::middleware([
    'auth:sanctum,admin',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard')->middleware('auth:admin');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('webPages.main');
    })->name('userdashboard');
});
