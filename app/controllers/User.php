<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Models\User as UserModels;

class User extends Controller
{

		private object $user;

	public function __construct()
	{
		$this->user = new UserModels;
	}
		public function index()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$data['user'] = $this->user->tampil();
		$this->user('user/index', $data);
	}
	public function tambah()
	{
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->user('user/tambah', $data);
	}

	public function proses()
	{
		if (isset($_POST['btn_simpan'])) {
			$this->user->simpan($_POST);
			echo "<script>alert('Data berhasil diitambahkan!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_update'])) {
			$this->user->update($_POST);
			echo "<script>alert('Data berhasil diupdate!'); window.location = 'Index';</script>";
		} elseif (isset($_POST['btn_delete'])) {
		$this->user->delete($_POST);
		echo "<script>alert('Data berhasil dihapus!'); window.location = 'Index';</script>";
	}
	}
	public function edit()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['user'] = $this->user->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->user('user/edit', $data);
	}

	public function delete()
	{
		$url = explode('/', $_GET['page']);
		$parameter = end($url);
		$data['user'] = $this->user->edit($parameter);
		$data['row_index'] = "Ini file app/controllers/Index.php - index()";
		$this->user('user/delete', $data);
	}
}
