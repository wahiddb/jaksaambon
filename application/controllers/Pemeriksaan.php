<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller {


	public function index()
	{
		$this->load->view('/user/_periksa.php');
	}

	public function laporan()
	{
		$this->load->view('/user/_laporanpegawai.php');
	}
}
