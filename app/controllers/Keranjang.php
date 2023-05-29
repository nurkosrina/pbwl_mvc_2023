<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Keranjang as KeranjangModels;

class Keranjang extends Controller
{

		private object $keranjang;

	public function __construct()
	{
		$this->keranjang = new KeranjangModels;
	}
		public function index()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$data['keranjang'] = $this->keranjang->tampil();
		$this->keranjang('keranjang/index', $data);
	}
	public function tambah()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->keranjang('keranjang/tambah', $data);
	}

	public function proses()
	{
		if (isset($_POST['btn_simpan'])) {
			$this->keranjang->simpan($_POST);
			echo "<script>alert('Data berhasil diitambahkan!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_update'])) {
			$this->keranjang->update($_POST);
			echo "<script>alert('Data berhasil diupdate!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_delete'])) {
		$this->keranjang->delete($_POST);
		echo "<script>alert('Data berhasil dihapus!'); window.location = 'Index';</script>";
	}
	}
	public function edit()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['keranjang'] = $this->keranjang->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->keranjang('keranjang/edit', $data);
	}

	public function delete()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['keranjang'] = $this->keranjang->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->keranjang('keranjang/delete', $data);
	}
}
