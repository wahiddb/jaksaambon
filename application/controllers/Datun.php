<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datun extends CI_Controller {


	public function index()
	{
		$this->load->view('/user/_datun.php');
	}
}