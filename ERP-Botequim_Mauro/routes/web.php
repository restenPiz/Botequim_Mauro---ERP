<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;

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
    Route::get('/allUser', [userController::class, 'allUser'])->name('allUser');
    Route::get('/updateUser', [userController::class, 'updateUser'])->name('updateUser');
    Route::get('/deleteUser', [userController::class, 'deleteUser'])->name('deleteUser');

});
//?Fim das rotas da parte de admin

require __DIR__.'/auth.php';

//*Fim das rotas do sistema