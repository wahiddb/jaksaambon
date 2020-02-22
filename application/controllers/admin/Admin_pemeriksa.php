<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pemeriksa extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_pemeriksa");
        $this->load->library('form_validation');
	}
	
	public function index()
	{
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='7'){
			$data["pemeriksa"] = $this->m_pemeriksa->getAll();
			$this->template_admin->load('/admin/template_admin', '/admin/pemeriksa', $data);
		} else{
			echo "<script>
			alert('Access Denied ! ');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}

	public function add()
    {
        $pemeriksa = $this->m_pemeriksa;
        $validation = $this->form_validation;
        $validation->set_rules($pemeriksa->rules());

        if ($validation->run()) {
            $pemeriksa->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->template_admin->load('/admin/template_admin', '/admin/addPemeriksa');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/admin_pemeriksa');
       
        $pemeriksa = $this->m_pemeriksa;
        $validation = $this->form_validation;
        $validation->set_rules($pemeriksa->rules());

        if ($validation->run()) {
            $pemeriksa->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pemeriksa"] = $pemeriksa->getById($id);
        if (!$data["pemeriksa"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editPemeriksa', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_pemeriksa->delete($id)) {
            redirect(site_url('admin/admin_pemeriksa'));
        }
    }
}
