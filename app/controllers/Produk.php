<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Produk as ProdukModels;

class Produk extends Controller
{

		private object $produk;

	public function __construct()
	{
		$this->produk = new ProdukModels;
	}
		public function index()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$data['produk'] = $this->produk->tampil();
		$this->produk('produk/index', $data);
	}
	public function tambah()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->produk('produk/tambah', $data);
	}

	public function proses()
	{
		if (isset($_POST['btn_simpan'])) {
			$this->produk->simpan($_POST);
			echo "<script>alert('Data berhasil diitambahkan!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_update'])) {
			$this->produk->update($_POST);
			echo "<script>alert('Data berhasil diupdate!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_delete'])) {
		$this->produk->delete($_POST);
		echo "<script>alert('Data berhasil dihapus!'); window.location = 'Index';</script>";
	}
	}
	public function edit()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['produk'] = $this->produk->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->produk('produk/edit', $data);
	}

	public function delete()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['produk'] = $this->produk->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->produk('produk/delete', $data);
	}
}
