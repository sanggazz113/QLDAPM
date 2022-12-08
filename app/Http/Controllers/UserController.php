<?php

namespace App\Http\Controllers;

use App\Models\DonHang;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}
	
	public function getHome()
	{
		return view('user.index');
	}
	
	public function getDonHang()
	{
		// Quản lý đơn hàng của khách hàng
		// "Đơn hàng của tôi"
		$donhang = DonHang::where('user_id', Auth::user()->id)->orderBy('created_at', 'desc')->get();
		return view('user.donhang', compact('donhang'));
	}
	
	public function getDonHang_ChiTiet($id)
	{
		return view('user.donhang_chitiet');
	}
	
	public function getMatKhau()
	{
		return view('user.doimatkhau');
	}
	
	public function getHoSo()
	{
		return view('user.hoso');
	}
}