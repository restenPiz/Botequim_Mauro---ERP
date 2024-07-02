<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\exportController;
use App\Http\Controllers\productController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\saleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\eventController;
use App\Http\Controllers\categoriesController;
use App\Http\Controllers\stockController;
use App\Http\Controllers\debitController;
use App\Http\Controllers\clientController;
use App\Http\Controllers\paymentController;
use App\Http\Controllers\reportController;
use App\Http\Controllers\redirectController;

//*Inicio das rotas do sistema

Route::get('/', function () {
    return view('auth.login');
});

//*Inicio da rota que redireciona para as diferentes views
Route::get('/dashboard', [redirectController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
//*Inicio do metodo responsavel pela contagem da quantidade de cada producto no stock
Route::get('/check-stock-levels', [redirectController::class,'checkStockLevelsAjax'])->name('checkStockLevels')->middleware(['auth', 'verified']);

//*Inicio da rota responsavel por verificar a quantidade de productos no stock
Route::get('/check-stock', [stockController::class, 'checkStock'])->middleware(['auth', 'verified']);

//?Inicio das rotas da parte de admin
Route::group(['prefix' => 'admin', 'middleware' => ['role:admin']], function() {

    //?Inicio das rotas da parte de perfil
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //?Inicio das rotas do usuario
    Route::get('/addUser', [userController::class, 'addUser'])->name('addUser');
    Route::get('/addManager', [userController::class, 'addStockManager'])->name('addStockManager');
    Route::get('/addAcountant', [userController::class, 'addAcountant'])->name('addAcountant');
    Route::post('/updateUser/{id}', [userController::class, 'updateUser'])->name('updateUser');
    Route::get('/deleteUser/{id}', [userController::class, 'deleteUser'])->name('deleteUser');
    Route::post('/storeUser', [userController::class, 'storeUser'])->name('storeUser');

    //?Inicio das rotas de evento
    Route::get('/addEvent', [eventController::class, 'addEvent'])->name('addEvent');
    Route::get('/allEvent', [eventController::class, 'allEvent'])->name('allEvent');
    Route::post('/updateEvent/{id}', [eventController::class, 'updateEvent'])->name('updateEvent');
    Route::get('/deleteEvent/{id}', [eventController::class, 'deleteEvent'])->name('deleteEvent');
    Route::post('/storeEvent', [eventController::class, 'storeEvent'])->name('storeEvent');

    //?Inicio das rotas da parte de dividas
    Route::post('/storeDebit', [debitController::class, 'storeDebit'])->name('storeDebit');
    Route::get('/allDebit/{id}', [debitController::class, 'allDebit'])->name('allDebit');
    Route::post('/updateDebit/{id}', [debitController::class, 'updateDebit'])->name('updateDebit');
    Route::get('/deleteDebit/{id}', [debitController::class, 'deleteDebit'])->name('deleteDebit');
    //*Inicio da rota para eliminar todos os productos na tabela de dividas
    Route::get('/deleteAllDebit', [debitController::class, 'deleteAllDebit'])->name('deleteAllDebit');

    //?Inicio das rotas da parte de clientes
    Route::get('/allClient', [clientController::class, 'addClient'])->name('addClient'); 
    Route::get('/showClient/{id}', [clientController::class, 'showClient'])->name('showClient');   
    
    //?Inicio das rotas da parte de pagamento
    Route::post('/storePayment', [paymentController::class, 'storePayment'])->name('storePayment');
    Route::get('/allPayment', [paymentController::class, 'addPayment'])->name('addPayment');
    Route::post('/updatePayment/{id}', [paymentController::class, 'updatePayment'])->name('updatePayment');
    Route::get('/deletePayment/{id}', [paymentController::class, 'deletePayment'])->name('deletePayment'); 

    //?Inicio das rotas da parte de relatorio
    Route::get('/allReport', [reportController::class, 'addReport'])->name('addReport');
});
//?Fim das rotas da parte de administrador

//?Inicio das rotas da parte do atendente
Route::group(['prefix' => 'attendant', 'middleware' => ['role:attendant']], function() {

    //?Inicio das rotas da parte de cliente (Concretamente na parte de pedidos)
    Route::get('/addClientRequest', [clientController::class, 'addClientRequest'])->name('addClientRequest');
    Route::get('/showClientRequest/{id}', [clientController::class, 'showClientRequest'])->name('showClientRequest');
    Route::get('/invoiceRequest/{id}', [clientController::class, 'invoiceRequest'])->name('invoiceRequest');
    Route::post('/storeClientRequest', [clientController::class, 'storeClientRequest'])->name('storeClientRequest');
    Route::post('/updateClientRequest', [clientController::class, 'updateClientRequest'])->name('updateClientRequest');
    Route::get('/deleteClientRequest/{id}', [clientController::class, 'deleteClientRequest'])->name('deleteClientRequest');

    //?Inicio das rotas de vendas
    Route::post('/storeSale', [saleController::class, 'storeSale'])->name('storeSale');
    Route::post('/updateSale/{id}', [saleController::class, 'updateSale'])->name('updateSale');
    Route::get('/deleteSale/{id}', [saleController::class, 'deleteSale'])->name('deleteSale');
    Route::get('/deleteAllSale', [saleController::class, 'deleteAllSale'])->name('deleteAllSale');
    //*Inicio da rota de insercao na tabela de vendas
    Route::post('/storeSaleHistory', [saleController::class, 'storeSaleHistory'])->name('storeSaleHistory');
    //*Fim das rotas de insercao na tabela de vendas

});

//*Inicio da rota responsavel por eliminar um producto da tabela de vendas
Route::get('/deleteSaleHistory/{id}', [saleController::class, 'deleteSaleHistory'])->name('deleteSaleHistory')->middleware(['auth', 'verified']);

//* Inicio das rotas multiplas */
Route::post('/storeClient', [clientController::class, 'storeClient'])->name('storeClient')->middleware(['auth', 'verified']);
Route::post('/updateClient/{id}', [clientController::class, 'updateClient'])->name('updateClient')->middleware(['auth', 'verified']);
Route::get('/deleteClient/{id}', [clientController::class, 'deleteClient'])->name('deleteClient')->middleware(['auth', 'verified']);  
//* Fim das rotas multiplas */

//* Inicio das rotas responsaveis por retornar os dados em json dos inputs */
Route::get('/getProductDetails', [StockController::class, 'getProductDetails'])->name('getProductDetails')->middleware(['auth', 'verified']);
Route::get('/getRequest', [StockController::class, 'getRequest'])->name('getRequest')->middleware(['auth', 'verified']);
Route::get('/getProduct', [StockController::class, 'getProduct'])->name('getProduct')->middleware(['auth', 'verified']);
Route::get('/getDebit', [debitController::class, 'getDebit'])->name('getDebit')->middleware(['auth', 'verified']);
//* Fim dos metodos responsaveis pelos metodos JSON */

//*Inicio da rota de todas vendas
Route::get('/allSale', [saleController::class, 'allSale'])->name('allSale')->middleware(['auth', 'verified']);

//*Inicio da rota responsavel por adicionar as vendas dos pedidos e das dividas
Route::post('/storeSaleRequest/{id}', [saleController::class, 'storeSaleRequest'])->name('storeSaleRequest')->middleware(['auth', 'verified']);

//*Inicio das rotas da parte de stock tanto para o administrador como para o gestor de stock
    //?Inicio das rotas de categoria
    Route::get('/addCategories', [categoriesController::class, 'addCategories'])->name('addCategories')->middleware(['auth', 'verified']);
    Route::post('/storeCategories', [categoriesController::class, 'storeCategories'])->name('storeCategories')->middleware(['auth', 'verified']);
    Route::get('/allCategories', [categoriesController::class, 'allCategories'])->name('allCategories')->middleware(['auth', 'verified']);
    Route::post('/updateCategories/{id}', [categoriesController::class, 'updateCategories'])->name('updateCategories')->middleware(['auth', 'verified']);
    Route::get('/deleteCategories/{id}', [categoriesController::class, 'deleteCategories'])->name('deleteCategories')->middleware(['auth', 'verified']);

    //?Inicio das rotas da parte de stock de entrada e saida
    Route::get('/addStock', [stockController::class, 'addStock'])->name('addStock')->middleware(['auth', 'verified']);
    Route::post('/storeStock', [stockController::class, 'storeStock'])->name('storeStock')->middleware(['auth', 'verified']);
    Route::get('/allStock', [stockController::class, 'allStock'])->name('allStock')->middleware(['auth', 'verified']);
    Route::post('/updateStock/{id}', [stockController::class, 'updateStock'])->name('updateStock')->middleware(['auth', 'verified']);
    Route::get('/deleteStock/{id}', [stockController::class, 'deleteStock'])->name('deleteStock')->middleware(['auth', 'verified']);
    //*Inicio da rota de stock de saida
    Route::get('/allStockOut', [stockController::class, 'allStockOut'])->name('allStockOut')->middleware(['auth', 'verified']);

    //?Inicio das rotas da parte de productos
    Route::get('/addProduct', [productController::class, 'addProduct'])->name('addProduct')->middleware(['auth', 'verified']);
    //*Inicio da rota responsavel por aumentar a quantidade de producto
    Route::post('/addProductQuantity', [productController::class, 'addProductQuantity'])->name('addProductQuantity')->middleware(['auth', 'verified']);
    Route::post('/storeProduct', [productController::class, 'storeProduct'])->name('storeProduct')->middleware(['auth', 'verified']);
    Route::get('/allProduct', [productController::class, 'allProduct'])->name('allProduct')->middleware(['auth', 'verified']);
    Route::post('/updateProduct/{id}', [productController::class, 'updateProduct'])->name('updateProduct')->middleware(['auth', 'verified']);
    Route::get('/deleteProduct/{id}', [productController::class, 'deleteProduct'])->name('deleteProduct')->middleware(['auth', 'verified']);

//*Inicio das rotas de dividas da parte do contabilista
Route::get('/allDebitAccountant', [debitController::class, 'allDebitAccountant'])->name('allDebitAccountant')->middleware(['auth', 'verified']);

//*Inicio das rotas 
Route::get('/getSalesDates', [saleController::class, 'getSalesDates'])->name('getSalesDates')->middleware(['auth', 'verified']);

//*Inicio das rotas da parte de relatorios
Route::get('/saleReport', [reportController::class, 'saleReport'])->name('saleReport')->middleware(['auth', 'verified']);
Route::get('/productReport', [reportController::class, 'productReport'])->name('productReport')->middleware(['auth', 'verified']);
Route::post('/generate-pdf', [reportController::class, 'generatePdf'])->middleware(['auth', 'verified']);
Route::post('/generate-sale-pdf', [reportController::class, 'generateSalePdf'])->name('generateSalePdf')->middleware(['auth', 'verified']);
//?Inicio das rotas para exportar pdfs das tabelas
Route::get('/export-debts-pdf/{client}', [reportController::class, 'exportDebits'])->name('export.debts.pdf')->middleware(['auth', 'verified']);
Route::get('/export-products-pdf', [reportController::class, 'exportProducts'])->name('export.products.pdf')->middleware(['auth', 'verified']);
Route::get('/export-sales-pdf', [reportController::class, 'exportSales'])->name('export.sales.pdf')->middleware(['auth', 'verified']);
Route::get('/export-sale-pdf', [reportController::class, 'exportSale'])->name('export.sale.pdf')->middleware(['auth', 'verified']);

//*Inicio do metodos que retornam os dados graficos
Route::get('/getTopSellingProducts', [SaleController::class, 'getTopSellingProducts'])->middleware(['auth', 'verified']);
Route::get('/getStockQuantities', [StockController::class, 'getStockQuantities'])->middleware(['auth', 'verified']);
Route::get('/getBestSellingProducts', [saleController::class, 'getBestSellingProducts'])->middleware(['auth', 'verified']);
Route::get('/getMonthlySales', [SaleController::class, 'getMonthlySales'])->middleware(['auth', 'verified']);

//*Inicios dos metodos responsaveis por fazer a pesquisa dos dados nas tabelas
Route::get('/search-products', [productController::class, 'search'])->name('search.products');
Route::get('/search-sales', [SaleController::class, 'searchSales'])->name('search.sales')->middleware(['auth', 'verified']);
    //?Inicio da rota de pesquisa de stock de entrada
Route::get('/search-stock-in', [productController::class, 'search'])->name('search.stock');
//*Fim das rotas responsaveis por fazer a pesquisa de dados nas tabelas

//*Inicio das rotas de pdf e scv
Route::get('/export/pdf', [exportController::class, 'exportPdf'])->name('export.pdf')->middleware(['auth', 'verified']);
Route::get('/export/excel', [exportController::class, 'exportExcel'])->name('export.excel')->middleware(['auth', 'verified']);
Route::get('/receipt/{id}', [SaleController::class, 'showReceipt'])->name('showReceipt')->middleware(['auth', 'verified']);

//*Inicio das rotas da parte de redirecionamento
Route::get('/lock-screen', [redirectController::class, 'show'])->name('lock-screen.show')->middleware(['auth', 'verified']);
Route::post('/lock-screen', [redirectController::class, 'unlock'])->name('lock-screen.unlock')->middleware(['auth', 'verified']);

//*Inicio das rotas da parte de perfil
Route::get('/updateProfile/{id}', [profileController::class, 'updateProfile'])->name('updateProfile')->middleware(['auth', 'verified']);
Route::post('/storeProfile/{id}', [profileController::class, 'storeProfile'])->name('storeProfile')->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

//*Fim das rotas do sistema