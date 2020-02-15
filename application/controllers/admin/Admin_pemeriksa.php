<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pemeriksa extends CI_Controller {


	public function index()
	{
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='7'){
			$this->template_admin->load('/admin/template_admin', '/admin/pemeriksa');
		} else{
			echo "<script>
			alert('Access Denied ! ');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}
}
