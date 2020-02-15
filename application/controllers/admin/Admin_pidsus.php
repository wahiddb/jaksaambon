<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pidsus extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_pidsus");
        $this->load->library('form_validation');
	}
	
	public function index()
	{
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='8'){
			$data["pidsus"] = $this->m_pidsus->getAll();
			$this->template_admin->load('/admin/template_admin', '/admin/pidsus', $data);
		} else{
			echo "<script>
			alert('Access Denied ! ');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}

	public function add()
    {
        $pidsus = $this->m_pidsus;
        $validation = $this->form_validation;
        $validation->set_rules($pidsus->rules());

        if ($validation->run()) {
            $pidsus->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->template_admin->load('/admin/template_admin', '/admin/addPidsus');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/admin_pidsus');
       
        $pidsus = $this->m_pidsus;
        $validation = $this->form_validation;
        $validation->set_rules($pidsus->rules());

        if ($validation->run()) {
            $pidsus->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pidsus"] = $pidsus->getById($id);
        if (!$data["pidsus"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editPidsus', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_pidsus->delete($id)) {
            redirect(site_url('admin/admin_pidsus'));
        }
    }
}
