<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iad extends CI_Controller {


	public function index()
	{
		$this->load->view('/user/_iad.php');
	}
}
