<?php

use App\Http\Controllers\KhachHangController;
use App\LoaiSanPham;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/Admin/dichvu','\App\Http\Controllers\DichvuController@index')->name('Admin/dichvu.index')->middleware('auth');;
Route::get('/Admin/dichvu/create','\App\Http\Controllers\DichvuController@create')->name('Admin/dichvu.create')->middleware('auth');;
Route::post('/Admin/dichvu','\App\Http\Controllers\DichvuController@store')->name('Admin/dichvu.store');
Route::get('/Admin/dichvu/edit/{id}','\App\Http\Controllers\DichvuController@edit')->name('Admin/dichvu.edit')->middleware('auth');
Route::put('/Admin/dichvu/edit/{id}','\App\Http\Controllers\DichvuController@update')->name('Admin/dichvu.edit')->middleware('auth');;
Route::delete('/Admin/dichvu/{id}','\App\Http\Controllers\DichvuController@destroy')->name('Admin/dichvu.index')->middleware('auth');
Route::resource('Admin/loaisanpham','LoaiSanPhamController')->middleware('auth');
Route::resource('Admin/huanluyenvien','HuanLuyenVienController')->middleware('auth');
Route::resource('Admin/blog','BlogController')->middleware('auth');
Route::resource('Admin/sanpham','SanPhamController')->middleware('auth');
Route::resource('Admin/khachhang','KhachHangController')->middleware('auth');
Route::get('/Admin/donhang','\App\Http\Controllers\HoaDonController@index')->name('Admin/donhang.index')->middleware('auth');
Route::get('/Admin/donhang/show','\App\Http\Controllers\HoaDonController@show')->name('Admin/donhang.show');
Route::get('/Admin/donhang/update/{id}','\App\Http\Controllers\HoaDonController@edit')->name('Admin/donhang.update');
Route::put('/Admin/donhang/update/{id}','\App\Http\Controllers\HoaDonController@update')->name('Admin/donhang.update');
Route::delete('/Admin/donhang/{id}','\App\Http\Controllers\HoaDonController@destroy')->name('Admin/donhang.index')->middleware('auth');
Route::get('/Admin/donhang/showcthd/{id}','\App\Http\Controllers\HoaDonController@showcthd')->name('Admin/donhang.showcthd');
Route::get('/Admin/thongke','\App\Http\Controllers\ThongKeController@index')->name('Admin/thongke.index');
Route::get('/Client/Trangchu',function() {
    return view('Client/Trangchu');
});
Route::get('/Client/DichVu/{id}','\App\Http\Controllers\DichVuHomeController@show')->name('Client/DichVu');
Route::resource('Client/Blog', 'BlogHomeController');
Route::resource('Client/HuanLuyenVien', 'HuanLuyenVienHomeController');
Route::resource('Client/SanPham', 'SanPhamHomeController');
Route::get('/Client/ChiTietSanPham/{id}','\App\Http\Controllers\SanPhamHomeController@show_id')->name('Client/ChiTietSanPham');
Route::get('/Client/DangKyDichVu','\App\Http\Controllers\ĐKKhachHangController@create')->name('Client/DangKyDichVu');
Route::post('/Client/DangKyDichVu','\App\Http\Controllers\ĐKKhachHangController@store')->name('Client/DangKyDichVu');
Route::get('/Client/GioHang','\App\Http\Controllers\GioHangHomeController@Cart')->name('Client/GioHang');
Route::get('/Client/Add_GioHang/{sanpham}','\App\Http\Controllers\GioHangHomeController@addToCart')->name('Client/Add_GioHang');
Route::get('/change-qty/{sanpham}', "GioHangHomeController@changeQty")->name('change_qty');
Route::get('/Client/Remove_Cart/{id}','\App\Http\Controllers\GioHangHomeController@removefromCart')->name('Client/Remove_Cart');
Route::post('/Client/GioHang','\App\Http\Controllers\GioHangHomeController@ThanhToan')->name('Client/GioHang');
Auth::routes([
    'register' => false
]);
Route::get('/Admin/index', 'HomeController@index')->name('Admin.index');
