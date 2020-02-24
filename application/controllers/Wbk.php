<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wbk extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Bidang WBK / WBMM';

		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("kategori","WBK / WBMM");
		$query2=$this->db->get();
		$data['post'] = $query2->result_array();

		$this->load->view('/user/event.php',$data);
		$this->load->view('/template/submenu_bina.php',$data);
		$this->load->view('/template/event.php',$data);
	}
}
