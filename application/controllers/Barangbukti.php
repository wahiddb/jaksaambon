<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barangbukti extends CI_Controller {


	public function index()
	{
		$this->load->view('/user/_bb.php');
	}

	public function dirampas()
	{
		$this->load->view('/user/_bb2.php');
	}

	public function kembali()
	{
		$this->load->view('/user/_bb3.php');
	}

	public function lelang()
	{
		$this->load->view('/user/_bb4.php');
	}
}
