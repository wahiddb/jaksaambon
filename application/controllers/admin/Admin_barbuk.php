<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_barbuk extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_barbuk");
        $this->load->library('form_validation');
	}
	
	public function index()
	{
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='3'){
			$data["barbuk"] = $this->m_barbuk->getAll();
			$this->template_admin->load('/admin/template_admin', '/admin/barang_bukti', $data);
		} else{
			echo "<script>
			alert('Access Denied ! ');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}

	public function add()
    {
        $barbuk = $this->m_barbuk;
        $validation = $this->form_validation;
        $validation->set_rules($barbuk->rules());

        if ($validation->run()) {
            $barbuk->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->template_admin->load('/admin/template_admin', '/admin/addBarbuk');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/admin_barbuk');
       
        $barbuk = $this->m_barbuk;
        $validation = $this->form_validation;
        $validation->set_rules($barbuk->rules());

        if ($validation->run()) {
            $barbuk->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["barbuk"] = $barbuk->getById($id);
        if (!$data["barbuk"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editBarbuk', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_barbuk->delete($id)) {
            redirect(site_url('admin/admin_barbuk'));
        }
    }
}
