<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pidum extends CI_Controller {


	public function index()
	{
		$this->load->view('/user/_pidum.php');
	}

	public function tilang()
	{
		$this->load->view('/user/__tilang.php');
	}
}
