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

Route::get('/cache', function () {
    return 'Página de Cache';
})->name('cache.index');

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

// Ruta para mostrar todos los clientes
Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

// Ruta para mostrar un cliente específico
Route::get('/customers/{customer}', [CustomerController::class, 'show'])->name('customers.show');

Route::get('/jobs', [JobController::class, 'index'])->name('jobs.index');

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


