<?php

use App\Http\Controllers\productController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\stockController;
use App\Http\Controllers\debitController;
use App\Http\Controllers\clientController;

//*Inicio das rotas do sistema

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//?Inicio das rotas da parte de admin
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {

    //?Inicio das rotas da parte de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //?Inicio das rotas do usuario
    Route::get('/addUser', [userController::class, 'addUser'])->name('addUser');
    Route::post('/updateUser/{id}', [userController::class, 'updateUser'])->name('updateUser');
    Route::get('/deleteUser/{id}', [userController::class, 'deleteUser'])->name('deleteUser');
    Route::post('/storeUser', [userController::class, 'storeUser'])->name('storeUser');

    //?Inicio das rotas de evento
    Route::get('/addEvent', [eventController::class, 'addEvent'])->name('addEvent');
    Route::get('/allEvent', [eventController::class, 'allEvent'])->name('allEvent');
    Route::post('/updateEvent/{id}', [eventController::class, 'updateEvent'])->name('updateEvent');
    Route::get('/deleteEvent/{id}', [eventController::class, 'deleteEvent'])->name('deleteEvent');
    Route::post('/storeEvent', [eventController::class, 'storeEvent'])->name('storeEvent');

    //?Inicio das rotas de categoria
    Route::get('/addCategories', [categoriesController::class, 'addCategories'])->name('addCategories');
    Route::post('/storeCategories', [categoriesController::class, 'storeCategories'])->name('storeCategories');
    Route::get('/allCategories', [categoriesController::class, 'allCategories'])->name('allCategories');
    Route::post('/updateCategories/{id}', [categoriesController::class, 'updateCategories'])->name('updateCategories');
    Route::get('/deleteCategories/{id}', [categoriesController::class, 'deleteCategories'])->name('deleteCategories');

    //?Inicio das rotas da parte de stock de entrada e saida
    Route::get('/addStock', [stockController::class, 'addStock'])->name('addStock');
    Route::post('/storeStock', [stockController::class, 'storeStock'])->name('storeStock');
    Route::get('/allStock', [stockController::class, 'allStock'])->name('allStock');
    Route::post('/updateStock/{id}', [stockController::class, 'updateStock'])->name('updateStock');
    Route::get('/deleteStock/{id}', [stockController::class, 'deleteStock'])->name('deleteStock');
    Route::get('/getProductDetails', [StockController::class, 'getProductDetails'])->name('getProductDetails');
    Route::get('/getProduct', [StockController::class, 'getProduct'])->name('getProduct');

    //?Inicio das rotas da parte de productos
    Route::get('/addProduct', [productController::class, 'addProduct'])->name('addProduct');
    Route::post('/storeProduct', [productController::class, 'storeProduct'])->name('storeProduct');
    Route::get('/allProduct', [productController::class, 'allProduct'])->name('allProduct');
    Route::post('/updateProduct/{id}', [productController::class, 'updateProduct'])->name('updateProduct');
    Route::get('/deleteProduct/{id}', [productController::class, 'deleteProduct'])->name('deleteProduct');

    //?Inicio das rotas da parte de dividas
    Route::post('/storeDebit', [debitController::class, 'storeDebit'])->name('storeDebit');
    Route::get('/allDebit', [debitController::class, 'allDebit'])->name('allDebit');
    Route::post('/updateDebit/{id}', [debitController::class, 'updateDebit'])->name('updateDebit');
    Route::get('/deleteDebit/{id}', [debitController::class, 'deleteDebit'])->name('deleteDebit');
    Route::get('/getDebit', [debitController::class, 'getDebit'])->name('getDebit');

    //?Inicio das rotas da parte de clientes
    Route::post('/storeClient', [clientController::class, 'storeClient'])->name('storeClient');
    Route::get('/allClient', [clientController::class, 'addClient'])->name('addClient');
    Route::post('/updateClient/{id}', [clientController::class, 'updateClient'])->name('updateClient');
    Route::get('/deleteClient/{id}', [clientController::class, 'deleteClient'])->name('deleteClient');   
    Route::get('/showClient/{id}', [clientController::class, 'showClient'])->name('showClient');   

});
//?Fim das rotas da parte de admin

require __DIR__.'/auth.php';

//*Fim das rotas do sistema