<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {


	public function index()
	{
		$this->load->view('/admin/dashboard');
		
	}

	public function barangbukti()
	{
		$this->load->view('/admin/barang_bukti.php');
		
	}

	public function pembinaan()
	{
		$this->load->view('/admin/pembinaan.php');
		
	}

	public function intel()
	{
		$this->load->view('/admin/intelejen.php');
		
	}

	public function pidum()
	{
		$this->load->view('/admin/pidum.php');
		
	}

	public function pidsus()
	{
		$this->load->view('/admin/pidsus.php');
		
	}

	public function datun()
	{
		$this->load->view('/admin/datun.php');
		
	}

	public function pemeriksa()
	{
		$this->load->view('/admin/pemeriksa.php');
		
	}

	public function adyaksa()
	{
		$this->load->view('/admin/adyaksa.php');
		
	}
}
