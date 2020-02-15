<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pembinaan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model("m_pegawai");
        $this->load->library('form_validation');
    }

    public function index()
    {
		if($this->session->userdata('level')==='1'  || $this->session->userdata('level')==='6'){
			$data["pegawai"] = $this->m_pegawai->getAll();
			$this->template_admin->load('/admin/template_admin', '/admin/pembinaan', $data);
		
		} else{
			echo "<script>
			alert('Access Denied ! ');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}

    public function add()
    {
        $pegawai = $this->m_pegawai;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if ($validation->run()) {
            $pegawai->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->template_admin->load('/admin/template_admin', '/admin/addPembinaan');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/admin_pembinaan');
       
        $pegawai = $this->m_pegawai;
        $validation = $this->form_validation;
        $validation->set_rules($pegawai->rules());

        if ($validation->run()) {
            $pegawai->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pegawai"] = $pegawai->getById($id);
        if (!$data["pegawai"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editPembinaan', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_pegawai->delete($id)) {
            redirect(site_url('admin/admin_pembinaan'));
        }
    }

}
