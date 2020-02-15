<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembinaan extends CI_Controller {


	public function index()
	{	$data['title'] = 'Pembinaan';
		$data['pegawai'] = $this->db->get('pegawai')->result_array();
		$this->load->view('/user/_bina.php', $data);
	}


}
