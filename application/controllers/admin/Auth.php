<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');
 
	}

	public function login()
	{
		if ($this->session->userdata('logged_in')) {
			redirect ('admin');
		}
		$this->load->view('/admin/login');
		
	}

	public function process()
	{
		$username = $this->input->post('username', TRUE);
		$password = $this->input->post('password', TRUE);
		$validate = $this->m_admin->validate($username, $password);
		if($validate->num_rows() > 0){
			$data  = $validate->row_array();
			$name  = $data['username'];
			$level = $data['level'];
			$sesdata = array(
				'username'  => $name,
				'level'     => $level,
				'logged_in' => TRUE
			);
			$this->session->set_userdata($sesdata);
			redirect('admin');
	 
		}else{
			echo "<script>
			alert('Username / Password Salah !');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('admin/auth/login');
	}


}
