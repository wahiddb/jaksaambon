<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_intel extends CI_Controller {


	public function index()
	{
		if($this->session->userdata('level')==='1'  || $this->session->userdata('level')==='5'){
			$this->template_admin->load('/admin/template_admin', '/admin/intelejen');
		} else{
			echo "<script>
			alert('Access Denied ! ');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}
}
