<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
	    parent::__construct();
			$this->load->model('Model_fungsi', 'fungsi');
	}

	// public function index()
	// {
	// 	$this->load->view('welcome_message');
	// }

	public function index()
	{
		$table 	= 'tb_barang';
		$field	= 'kode_barang';

		$lastKode = $this->fungsi->getMax($table, $field);

		//mengambil 4 karakter dari belakang
		$noUrut = (int) substr($lastKode, -4, 4);
		$noUrut++;

		$str= 'K';
		$newKode = $str . sprintf('%04s', $noUrut);

		// var_dump($newKode);
		echo $newKode;
	}

}
