<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {


	public function index()
	{
		if($this->session->userdata('logged_in')){
			$query = $this->db->query('SELECT * FROM rating'); 
            $data['rating'] = $query->result_array();
			$this->template_admin->load('/admin/template_admin', '/admin/dashboard', $data);
		} else{
			echo "<script>
			alert('Access Denied ! ');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}
}
