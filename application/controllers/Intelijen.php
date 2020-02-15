<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Intelijen extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('/user/_intel.php');
	}

	public function laporan()
	{

		$data['intel'] = $this->db->get('intel')->result_array();
		$this->load->view('/user/_laporan.php', $data);
	}

	public function input()
	{
		$data = array(
			'pelapor'	=> $this->input->post('pelapor'),
			'terlapor'	=> $this->input->post('terlapor'),
			'identitas'	=> $this->input->post('identitas'),
			'no_identitas'	=> $this->input->post('no_identitas'),
			'email'	=> $this->input->post('email'),
			'tindak_pidana'	=> $this->input->post('tindak_pidana'),
			'keterangan'	=> $this->input->post('keterangan'),
			'status'	=> 'Belum di Proses'
		);
		$this->db->insert('intel', $data);

		redirect('intelijen/laporan');
	}
}
