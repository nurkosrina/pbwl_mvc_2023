<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\DetPemesanan as DetPemesananModels;

class DetPemesanan extends Controller
{

		private object $detpemesanan;

	public function __construct()
	{
		$this->detpemesanan = new DetPemesananModels;
	}
		public function index()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$data['detpemesanan'] = $this->detpemesanan->tampil();
		$this->detpemesanan('detpemesanan/index', $data);
	}
	public function tambah()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->detpemesanan('detpemesanan/tambah', $data);
	}

	public function proses()
	{
		if (isset($_POST['btn_simpan'])) {
			$this->detpemesanan->simpan($_POST);
			echo "<script>alert('Data berhasil diitambahkan!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_update'])) {
			$this->detpemesanan->update($_POST);
			echo "<script>alert('Data berhasil diupdate!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_delete'])) {
		$this->detpemesanan->delete($_POST);
		echo "<script>alert('Data berhasil dihapus!'); window.location = 'Index';</script>";
	}
	}
	public function edit()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['detpemesanan'] = $this->detpemesanan->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->detpemesanan('detpemesanan/edit', $data);
	}

	public function delete()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['detpemesanan'] = $this->detpemesanan->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->detpemesanan('detpemesanan/delete', $data);
	}
}
