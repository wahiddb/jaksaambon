<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_pidum extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model("m_pidum");
        $this->load->model("m_tilang");
        $this->load->library('form_validation');
	}
	
	public function index()
	{
		if($this->session->userdata('level')==='1' || $this->session->userdata('level')==='9'){
            $data["pidum"] = $this->m_pidum->getAll();
            $data["tilang"] = $this->m_tilang->getAll();
			$this->template_admin->load('/admin/template_admin', '/admin/pidum', $data);
		} else{
			echo "<script>
			alert('Access Denied ! ');
			window.location='".site_url('admin/auth/login')."';
			</script>";
		}
	}

	public function add()
    {
        $pidum = $this->m_pidum;
        $validation = $this->form_validation;
        $validation->set_rules($pidum->rules());

        if ($validation->run()) {
            $pidum->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->template_admin->load('/admin/template_admin', '/admin/addPidum');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/admin_pidum');
       
        $pidum = $this->m_pidum;
        $validation = $this->form_validation;
        $validation->set_rules($pidum->rules());

        if ($validation->run()) {
            $pidum->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["pidum"] = $pidum->getById($id);
        if (!$data["pidum"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editPidum', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_pidum->delete($id)) {
            redirect(site_url('admin/admin_pidum'));
        }
    }

    public function addtilang()
    {
        $tilang = $this->m_tilang;
        $validation = $this->form_validation;
        $validation->set_rules($tilang->rules());

        if ($validation->run()) {
            $tilang->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->template_admin->load('/admin/template_admin', '/admin/addTilang');
    }

    public function edittilang($id = null)
    {
        if (!isset($id)) redirect('admin/admin_pidum');
       
        $tilang = $this->m_tilang;
        $validation = $this->form_validation;
        $validation->set_rules($tilang->rules());

        if ($validation->run()) {
            $tilang->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["tilang"] = $tilang->getById($id);
        if (!$data["tilang"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editTilang', $data);
    }

    public function deletetilang($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_tilang->delete($id)) {
            redirect(site_url('admin/admin_pidum'));
        }
    }
}
