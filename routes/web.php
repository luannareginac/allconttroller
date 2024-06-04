<?php


use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FornecedorController;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\VendaController;
use App\Http\Controllers\VendedorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('pages.all-form');
});
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produtos.lista');
Route::post('/produto/salvar', [ProdutoController::class, 'salvar'])->name('produto.salvar');
Route::delete('/produto/remover/{id}', [ProdutoController::class, 'remover'])->name('produto.remover');
Route::get('/produto/editar/{id}', [ProdutoController::class, 'editar'])->name('produto.editar');

Route::get('/fornecedores', [FornecedorController::class, 'index'])->name('fornecedores.lista');
Route::post('/fornecedores/salvar', [FornecedorController::class, 'salvar'])->name('fornecedores.salvar');
Route::get('/fornecedores/editar/{id}', [FornecedorController::class, 'editar'])->name('fornecedores.editar');
Route::delete('/fornecedores/remover/{id}', [FornecedorController::class, 'remover'])->name('fornecedores.remover');


Route::get('/clientes', [ClienteController::class, 'index'])->name('cliente.lista');
Route::post('/clientes/salvar', [ClienteController::class, 'salvar'])->name('cliente.salvar');
Route::get('/clientes/editar/{id}', [ClienteController::class, 'editar'])->name('cliente.editar');
Route::delete('/clientes/remover/{id}', [ClienteController::class, 'remover'])->name('cliente.remover');


Route::get('/vendedores', [VendedorController::class, 'index'])->name('vendedor.lista');
Route::post('/vendedores/salvar', [VendedorController::class, 'salvar'])->name('vendedor.salvar');
Route::get('/vendedores/editar/{id}', [VendedorController::class, 'editar'])->name('vendedor.editar');
Route::delete('/vendedores/remover/{id}', [VendedorController::class, 'remover'])->name('vendedor.remover');

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categoria.lista');
Route::post('/categorias/salvar', [CategoriaController::class, 'salvar'])->name('categoria.salvar');
Route::get('/categorias/editar/{id}', [CategoriaController::class, 'editar'])->name('categoria.editar');
Route::delete('/categorias/remover/{id}', [CategoriaController::class, 'remover'])->name('categoria.remover');

Route::get('/vendas', [VendaController::class, 'index'])->name('venda.lista');
Route::post('/vendas/salvar', [VendaController::class, 'salvar'])->name('venda.salvar');
Route::delete('/vendas/remover/{id}', [VendaController::class, 'remover'])->name('venda.remover');
Route::get('/vendas/editar/{id}', [VendaController::class, 'editar'])->name('venda.editar');
Route::get('/buscarcode', [VendaController::class, 'buscarcode']);
