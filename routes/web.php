<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PedidoController;

Route::resource('pedidos', PedidoController::class);

Route::get('/', function () {
    return view('pedidos.index'); // Laravel buscará resources/views/pedidos/index.blade.php
});
Route::get('/pedidos', [PedidoController::class, 'showAll'])->name('pedidos.index');

Route::get('/pedidos/create', [PedidoController::class, 'create'])->name('pedidos.create');

Route::get('/pedidos/{pedido}/edit', [PedidoController::class, 'edit'])->name('pedidos.edit');

Route::put('/pedidos/{pedido}', [PedidoController::class, 'update'])->name('pedidos.update');

Route::delete('/pedidos/{pedido}', [PedidoController::class, 'destroy'])->name('pedidos.destroy');

Route::put('/pedidos/{pedido}', [PedidoController::class, 'update'])->name('pedidos.update');

Route::get('/caches', function () {
    return view('caches');
})->name('caches.index');
Route::get('/caches', [CacheController::class, 'index'])->name('caches.index');


use App\Http\Controllers\CustomerController;

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

use App\Http\Controllers\JobController;

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

use App\Http\Controllers\ProductController;

Route::get('/products', [ProductController::class, 'index'])->name('products.index');

use App\Http\Controllers\RoleController;

Route::get('/roles', [RoleController::class, 'index'])->name('roles.index');

use App\Http\Controllers\StatusController;

Route::get('/status', [StatusController::class, 'index'])->name('status.index');

use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');

Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');

Route::post('/customers', [CustomerController::class, 'store'])->name('costumers.store');

Route::resource('customers', CustomerController::class);



// Ruta para mostrar un cliente específico
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');

use App\Http\Controllers\CacheController;

Route::get('/caches', [CacheController::class, 'index'])->name('caches.index');


Route::get('/caches', [CacheController::class, 'index'])->name('caches.index');
Route::get('/caches/create', [CacheController::class, 'create'])->name('cache.create');



Route::get('/products', [ProductController::class, 'index'])->name('product.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');


Route::get('/products', [ProductController::class, 'index'])->name('product.index');



Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/products', [ProductController::class, 'store'])->name('product.store');
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::post('/cache', [CacheController::class, 'store'])->name('cache.store');
Route::get('/caches', [CacheController::class, 'index'])->name('cache.index');

use App\Http\Controllers\CustomersController;
Route::resource('customers', CustomersController::class);


Route::get('/caches', [CacheController::class, 'index'])->name('caches.index');

// Ruta para mostrar el formulario de creación
Route::get('/caches/create', [CacheController::class, 'create'])->name('caches.create');

Route::post('/cache', function () {
    Cache::put('clave', 'Este es un valor en caché', now()->addMinutes(10)); // Guarda la caché por 10 min
    return 'Datos guardados en caché';
})->name('cache.store');


Route::resource('jobs', JobController::class);
Route::post('/jobs', [JobController::class, 'store'])->name('jobs.store');

Route::resource('roles', RoleController::class);



Route::get('/status', [StatusController::class, 'index'])->name('status.index');
Route::get('/status/create', [StatusController::class, 'create'])->name('status.create');
Route::post('/status', [StatusController::class, 'store'])->name('status.store'); // Agrega esta línea



Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::post('/users', [UserController::class, 'store'])->name('users.store'); // Agrega esta línea

Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');



Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create'); // 🚨 Asegúrate de que esta línea existe
Route::post('/products', [ProductController::class, 'store'])->name('products.store');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.show');
Route::resource('products', ProductController::class);
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::get('/cache', [CacheController::class, 'index'])->name('cache.index');
