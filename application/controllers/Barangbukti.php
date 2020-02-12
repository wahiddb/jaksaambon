<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barangbukti extends CI_Controller {


	public function index()
	{
		$this->load->view('/user/_bb.php');
	}
}
