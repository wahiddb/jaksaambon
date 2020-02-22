<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wbk extends CI_Controller {


	public function index()
	{
		$this->load->view('/user/_wbk.php');
	}
}
