<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iad extends CI_Controller {


	public function index()
	{
		$data['title'] = 'Ikatan Adyaksa Dharmakarini';

		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("kategori","Adyaksa Dharmakarin");
		$query2=$this->db->get();
		$data['post'] = $query2->result_array();

		
		$this->load->view('/user/_iad.php',$data);
		$this->load->view('/template/event.php',$data);
	}
}
