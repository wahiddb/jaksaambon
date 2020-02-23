<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datun extends CI_Controller
{


	public function index()
	{
		$this->load->view('/user/_datun.php');
	}


	public function profil()
	{
		$this->load->view('/user/__jaksa.php');
	}

	public function bantuan()
	{
		$this->load->view('/user/_gratis.php');
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
