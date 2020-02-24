<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pidsus extends CI_Controller
{


	public function index()
	{	$data['title'] = "Pidana Khusus";
		$data['pidsus'] = $this->db->get('pidsus')->result_array();
		$this->load->view('/user/_pidsus.php', $data);
	}
}
