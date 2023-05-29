<?php

namespace App\Core;

class Controller
{
	// Layout home
	public function home($view, $data = [])
	{
		require_once ROOT . "layouts/home.php";
	}

	// layout dashboard
	public function dashboard($view, $data = [])
	{
		require_once ROOT . "layouts/dashboard.php";
	}

	public function kategori($view, $data = [])
	{
		require_once ROOT . "layouts/kategori.php";
	}

	public function user($view, $data = [])
	{
		require_once ROOT . "layouts/user.php";
	}

	public function produk($view, $data = [])
	{
		require_once ROOT . "layouts/produk.php";
	}

	public function keranjang($view, $data = [])
	{
		require_once ROOT . "layouts/keranjang.php";
	}

	public function pemesanan($view, $data = [])
	{
		require_once ROOT . "layouts/pemesanan.php";
	}

	public function detpemesanan($view, $data = [])
	{
		require_once ROOT . "layouts/detpemesanan.php";
	}
}
