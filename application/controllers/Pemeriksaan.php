<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemeriksaan extends CI_Controller
{


	public function index()
	{
		$this->load->view('/user/_periksa.php');
	}

	public function laporan()
	{
		$data['pemeriksa'] = $this->db->get('pemeriksa')->result_array();
		$this->load->view('/user/_laporanpegawai.php', $data);
	}

	public function input()
	{
		$data = array(
			'pelapor'	=> $this->input->post('pelapor'),
			'terlapor'	=> $this->input->post('terlapor'),
			'identitas'	=> $this->input->post('identitas'),
			'no_identitas'	=> $this->input->post('no_identitas'),
			'email'	=> $this->input->post('email'),
			'pelanggaran'	=> $this->input->post('pelanggaran'),
			'keterangan'	=> $this->input->post('keterangan'),
			'status'	=> 'Belum di Proses'
		);
		$this->db->insert('pemeriksa', $data);

		redirect('pemeriksaan');
	}
}
