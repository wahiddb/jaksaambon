<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_datun extends CI_Controller {


	public function index()
	{
		$this->template_admin->load('/admin/template_admin', '/admin/datun');
		
	}
}
