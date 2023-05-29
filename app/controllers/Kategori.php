<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\Kategori as KategoriModels;

class Kategori extends Controller
{

		private object $kategori;

	public function __construct()
	{
		$this->kategori = new KategoriModels;
	}
		public function index()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$data['kategori'] = $this->kategori->tampil();
		$this->kategori('kategori/index', $data);
	}
	public function tambah()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->kategori('kategori/tambah', $data);
	}

	public function proses()
	{
		if (isset($_POST['btn_simpan'])) {
			$this->kategori->simpan($_POST);
			echo "<script>alert('Data berhasil diitambahkan!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_update'])) {
			$this->kategori->update($_POST);
			echo "<script>alert('Data berhasil diupdate!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_delete'])) {
		$this->kategori->delete($_POST);
		echo "<script>alert('Data berhasil dihapus!'); window.location = 'Index';</script>";
	}
	}
	public function edit()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['kategori'] = $this->kategori->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->kategori('kategori/edit', $data);
	}

	public function hapus()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['kategori'] = $this->kategori->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->kategori('kategori/delete', $data);
	}
}
