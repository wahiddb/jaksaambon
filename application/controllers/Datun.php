<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datun extends CI_Controller
{


	public function index()
	{	$data['title'] = "Perdata & Tata Usaha";
		$this->load->view('/user/_datun.php',$data);
	}


	public function profil()
	{$data['title'] = "Perdata & Tata Usaha";
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("kategori","Jaksa Negara");
		$query2=$this->db->get();
		if (! $query2->num_rows() == 0) {
			$data['pos'] = $query2->result_array();
			$data['query'] = true;
			$this->load->view('/user/profil.php',$data);
		} else {
			
			$data['query'] = false;
			$this->load->view('/user/profil.php', $data);
		}
		
		
	}

	public function bantuan()
	{$data['title'] = "Perdata & Tata Usaha";
		$this->load->view('/user/_gratis.php',$data);
	}


	public function input()
	{
		$data = array(
			'pemohon'	=> $this->input->post('pemohon'),
			'email'	=> $this->input->post('email'),
			'perihal'	=> $this->input->post('perihal'),
			'keterangan'	=> $this->input->post('keterangan')
		);
		$this->db->insert('datun', $data);

		redirect('datun');
	}

	public function inputbantuan()
	{
		$data = array(
			'pemohon'	=> $this->input->post('pemohon'),
			'email'	=> $this->input->post('email'),
			'perihal'	=> $this->input->post('perihal'),
			'keterangan'	=> $this->input->post('keterangan'),
			'ket_tambahan'	=> 'gratis'
		);
		$this->db->insert('datun', $data);

		redirect('datun');
	}
}
