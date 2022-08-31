<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::resource('/awal', 'AdminController');

Route::resource('/supllier','SupplierController');
Route::resource('/kategori','KategoriController');
Route::resource('/barang','BarangController');
Route::resource('/pembelian','PembelianController');
Route::resource('/penjualan','PenjualanController');
Route::get('/fromemail', 'emailcontroller@index')->name('fromemail.index');
Route::post('kirim', 'emailcontroller@kirim');

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('/','LoginController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::match(['get', 'post'],'/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
Route::resource('/user','UserController');

// Route::get('/', function () {
//     return view('user.index');
// });
