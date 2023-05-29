<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Pemesanan as PemesananModels;

class Pemesanan extends Controller
{

		private object $pemesanan;

	public function __construct()
	{
		$this->pemesanan = new PemesananModels;
	}
		public function index()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$data['pemesanan'] = $this->pemesanan->tampil();
		$this->pemesanan('pemesanan/index', $data);
	}
	public function tambah()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->pemesanan('pemesanan/tambah', $data);
	}

	public function proses()
	{
		if (isset($_POST['btn_simpan'])) {
			$this->pemesanan->simpan($_POST);
			echo "<script>alert('Data berhasil diitambahkan!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_update'])) {
			$this->pemesanan->update($_POST);
			echo "<script>alert('Data berhasil diupdate!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_delete'])) {
		$this->pemesanan->delete($_POST);
		echo "<script>alert('Data berhasil dihapus!'); window.location = 'Index';</script>";
	}
	}
	public function edit()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['pemesanan'] = $this->pemesanan->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->pemesanan('pemesanan/edit', $data);
	}

	public function delete()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['pemesanan'] = $this->pemesanan->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->pemesanan('pemesanan/delete', $data);
	}
}
