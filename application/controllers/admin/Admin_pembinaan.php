<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pembinaan extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('m_pegawai');
    }
    
	public function index()
	{
        $data ['data'] = $this->m_pegawai->tampil_pegawai();
		$this->template_admin->load('/admin/template_admin', '/admin/pembinaan', $data);
		
    }
    
    public function hapus_pegawai()
	{
        $id = $this->input->post['id'];
        $data ['data'] = $this->m_pegawai->tampil_pegawai();
        $this->m_pegawai->hapus_pegawai($id);
		
    }

    public function edit_pegawai()
	{
        $id = $this->input->post['id'];
        $nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$jabatan = $this->input->post('jabatan');
		$bidang = $this->input->post('bidang');
		$gol = $this->input->post('gol');
		$pendidikan = $this->input->post('pendidikan');
		$ttl = $this->input->post('ttl');
        $phone = $this->input->post('phone');
        $this->m_pegawai->update_pegawai($id, $nama, $nip, $jabatan, $bidang, $gol, $pendidikan, $ttl, $phone);
		
    }

    public function add_pegawai()
	{
        $nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$jabatan = $this->input->post('jabatan');
		$bidang = $this->input->post('bidang');
		$gol = $this->input->post('gol');
		$pendidikan = $this->input->post('pendidikan');
		$ttl = $this->input->post('ttl');
        $phone = $this->input->post('phone');
        $this->m_pegawai->add_pegawai($id,$nama,$nip,$jabatan,$bidang,$gol,$pendidikan,$ttl,$phone);
		redirect('admin/admin_pembinaan');
    }

}
