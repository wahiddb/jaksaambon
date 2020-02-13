<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Intelijen extends CI_Controller {


	public function index()
	{
		$this->load->view('/user/_intel.php');
	}

	public function laporan()
	{
		$this->load->view('/user/_laporan.php');
	}
}
