<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_intel extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_intel");
        $this->load->library('form_validation');
	}
	
	public function index()
	{
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='5'){
			$data["intel"] = $this->m_intel->getAll();
			$this->template_admin->load('/admin/template_admin', '/admin/intelejen', $data);
		} else{
			echo "<script>
			alert('Access Denied ! ');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}

	public function add()
    {
        $intel = $this->m_intel;
        $validation = $this->form_validation;
        $validation->set_rules($intel->rules());

        if ($validation->run()) {
            $intel->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->template_admin->load('/admin/template_admin', '/admin/addIntel');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/admin_intel');
       
        $intel = $this->m_intel;
        $validation = $this->form_validation;
        $validation->set_rules($intel->rules());

        if ($validation->run()) {
            $intel->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["intel"] = $intel->getById($id);
        if (!$data["intel"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editIntel', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_intel->delete($id)) {
            redirect(site_url('admin/admin_intel'));
        }
    }
}
