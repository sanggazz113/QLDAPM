<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoaiSanPhamController;
use App\Http\Controllers\HangSanXuatController;
use App\Http\Controllers\TinhTrangController;
use App\Http\Controllers\SanPhamController; 
use App\Http\Controllers\DonHangController;
use App\Http\Controllers\DonHangChiTietController;
use App\Http\Controllers\NguoiDungController;

// Đăng ký, đăng nhập, Quên mật khẩu
Auth::routes();

// Trang chủ
Route::get('/', [HomeController::class, 'getHome'])->name('frontend');
Route::get('/home', [HomeController::class, 'getHome'])->name('frontend');

// Quản lý Loại sản phẩm
Route::get('/loaisanpham', [LoaiSanPhamController::class, 'getDanhSach'])->name('admin.loaisanpham');
Route::get('/loaisanpham/them', [LoaiSanPhamController::class, 'getThem'])->name('admin.loaisanpham.them');
Route::post('/loaisanpham/them', [LoaiSanPhamController::class, 'postThem'])->name('admin.loaisanpham.them');
Route::get('/loaisanpham/sua/{id}', [LoaiSanPhamController::class, 'getSua'])->name('admin.loaisanpham.sua');
Route::post('/loaisanpham/sua/{id}', [LoaiSanPhamController::class, 'postSua'])->name('admin.loaisanpham.sua');
Route::get('/loaisanpham/xoa/{id}', [LoaiSanPhamController::class, 'getXoa'])->name('admin.loaisanpham.xoa');

// Quản lý Hãng sản xuất
Route::get('/hangsanxuat', [HangSanXuatController::class, 'getDanhSach'])->name('admin.hangsanxuat');
Route::get('/hangsanxuat/them', [HangSanXuatController::class, 'getThem'])->name('admin.hangsanxuat.them');
Route::post('/hangsanxuat/them', [HangSanXuatController::class, 'postThem'])->name('admin.hangsanxuat.them');
Route::get('/hangsanxuat/sua/{id}', [HangSanXuatController::class, 'getSua'])->name('admin.hangsanxuat.sua');
Route::post('/hangsanxuat/sua/{id}', [HangSanXuatController::class, 'postSua'])->name('admin.hangsanxuat.sua');
Route::get('/hangsanxuat/xoa/{id}', [HangSanXuatController::class, 'getXoa'])->name('admin.hangsanxuat.xoa');

// Quản lý Tình trạng
Route::get('/tinhtrang', [TinhTrangController::class, 'getDanhSach'])->name('admin.tinhtrang');
Route::get('/tinhtrang/them', [TinhTrangController::class, 'getThem'])->name('admin.tinhtrang.them');
Route::post('/tinhtrang/them', [TinhTrangController::class, 'postThem'])->name('admin.tinhtrang.them');
Route::get('/tinhtrang/sua/{id}', [TinhTrangController::class, 'getSua'])->name('admin.tinhtrang.sua');
Route::post('/tinhtrang/sua/{id}', [TinhTrangController::class, 'postSua'])->name('admin.tinhtrang.sua');
Route::get('/tinhtrang/xoa/{id}', [TinhTrangController::class, 'getXoa'])->name('admin.tinhtrang.xoa');

// Quản lý Sản phẩm
Route::get('/sanpham', [SanPhamController::class, 'getDanhSach'])->name('admin.sanpham');
Route::get('/sanpham/them', [SanPhamController::class, 'getThem'])->name('admin.sanpham.them');
Route::post('/sanpham/them', [SanPhamController::class, 'postThem'])->name('admin.sanpham.them');
Route::get('/sanpham/sua/{id}', [SanPhamController::class, 'getSua'])->name('admin.sanpham.sua');
Route::post('/sanpham/sua/{id}', [SanPhamController::class, 'postSua'])->name('admin.sanpham.sua');
Route::get('/sanpham/xoa/{id}', [SanPhamController::class, 'getXoa'])->name('admin.sanpham.xoa');
Route::post('/sanpham/nhap', [SanPhamController::class, 'postNhap'])->name('admin.sanpham.nhap');
Route::get('/sanpham/xuat', [SanPhamController::class, 'getXuat'])->name('admin.sanpham.xuat');

// Quản lý Đơn hàng
Route::get('/donhang', [DonHangController::class, 'getDanhSach'])->name('admin.donhang');
Route::get('/donhang/them', [DonHangController::class, 'getThem'])->name('admin.donhang.them');
Route::post('/donhang/them', [DonHangController::class, 'postThem'])->name('admin.donhang.them');
Route::get('/donhang/sua/{id}', [DonHangController::class, 'getSua'])->name('admin.donhang.sua');
Route::post('/donhang/sua/{id}', [DonHangController::class, 'postSua'])->name('admin.donhang.sua');
Route::get('/donhang/xoa/{id}', [DonHangController::class, 'getXoa'])->name('admin.donhang.xoa');

// Quản lý Đơn hàng chi tiết
Route::get('/donhang/chitiet', [DonHangChiTietController::class, 'getDanhSach'])->name('admin.donhang.chitiet');
Route::get('/donhang/chitiet/sua/{id}', [DonHangChiTietController::class, 'getSua'])->name('admin.donhang.chitiet.sua');
Route::post('/donhang/chitiet/sua/{id}', [DonHangChiTietController::class, 'postSua'])->name('admin.donhang.chitiet.sua');
Route::get('/donhang/chitiet/xoa/{id}', [DonHangChiTietController::class, 'getXoa'])->name('admin.donhang.chitiet.xoa');

// Quản lý Tài khoản người dùng
Route::get('/nguoidung', [NguoiDungController::class, 'getDanhSach'])->name('admin.nguoidung');
Route::get('/nguoidung/them', [NguoiDungController::class, 'getThem'])->name('admin.nguoidung.them');
Route::post('/nguoidung/them', [NguoiDungController::class, 'postThem'])->name('admin.nguoidung.them');
Route::get('/nguoidung/sua/{id}', [NguoiDungController::class, 'getSua'])->name('admin.nguoidung.sua');
Route::post('/nguoidung/sua/{id}', [NguoiDungController::class, 'postSua'])->name('admin.nguoidung.sua');
Route::get('/nguoidung/xoa/{id}', [NguoiDungController::class, 'getXoa'])->name('admin.nguoidung.xoa');