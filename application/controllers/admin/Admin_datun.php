<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_datun extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_datun");
        $this->load->library('form_validation');
	}
	
	public function index()
	{
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='4'){
			$data["datun"] = $this->m_datun->getAll();
			$this->template_admin->load('/admin/template_admin', '/admin/datun', $data);
		} else{
			echo "<script>
			alert('Access Denied ! ');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}

	public function add()
    {
        $datun = $this->m_datun;
        $validation = $this->form_validation;
        $validation->set_rules($datun->rules());

        if ($validation->run()) {
            $datun->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->template_admin->load('/admin/template_admin', '/admin/addDatun');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/admin_datun');
       
        $datun = $this->m_datun;
        $validation = $this->form_validation;
        $validation->set_rules($datun->rules());

        if ($validation->run()) {
            $datun->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["datun"] = $datun->getById($id);
        if (!$data["datun"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editDatun', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_datun->delete($id)) {
            redirect(site_url('admin/admin_datun'));
        }
    }
}
