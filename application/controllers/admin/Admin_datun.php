<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_datun extends CI_Controller {


	public function index()
	{
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='4'){
			$this->template_admin->load('/admin/template_admin', '/admin/datun');
		} else{
			echo "<script>
			alert('Access Denied ! ');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}
}
