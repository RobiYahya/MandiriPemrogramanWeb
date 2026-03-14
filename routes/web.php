<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListBarangController;

Route::get('/welcome', function () {
    return "Welcome";
});

Route::get('/user/{id}', function ($id) {
    return "User ID: " . $id;
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    Route::get('/users', function () {
        return 'Admin Users';
    });

});

//Route::get('/listbarang/{id}/{nama}', function ($id, $nama) {
//    return view('list_barang', [
//        'id' => $id,
//        'nama' => $nama
//    ]);
// });

Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);