<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_post extends CI_Controller{
     
    function __construct(){
        parent::__construct();
        $this->load->model("m_post");
    }
 
    function index(){
        if($this->session->userdata('level')==='1'){
			$data["kegiatan"] = $this->m_post->getAll();
		}
        
        if($this->session->userdata('level')==='2'){
			$query = $this->db->query('SELECT * FROM post WHERE kategori = "Adyaksa Dharmakarin"'); 
            $data['kegiatan'] = $query->result();
        }
        
        if($this->session->userdata('level')==='3'){
			$query = $this->db->query('SELECT * FROM post WHERE kategori = "Barang Bukti"'); 
            $data['kegiatan'] = $query->result();
        }
        
        if($this->session->userdata('level')==='4'){
			$query = $this->db->query('SELECT * FROM post WHERE kategori = "Perdata & Tata Usaha"'); 
            $data['kegiatan'] = $query->result();
        }
        
        if($this->session->userdata('level')==='5'){
			$query = $this->db->query('SELECT * FROM post WHERE kategori = "Intelijen"'); 
            $data['kegiatan'] = $query->result();
        }
        
        if($this->session->userdata('level')==='6'){
			$query = $this->db->query('SELECT * FROM post WHERE kategori = "Pembinaan"'); 
            $data['kegiatan'] = $query->result();
        }
        
        if($this->session->userdata('level')==='7'){
			$query = $this->db->query('SELECT * FROM post WHERE kategori = "Pemeriksa"'); 
            $data['kegiatan'] = $query->result();
        }
        
        if($this->session->userdata('level')==='8'){
			$query = $this->db->query('SELECT * FROM post WHERE kategori = "Pidana Khusus"'); 
            $data['kegiatan'] = $query->result();
        }
        
        if($this->session->userdata('level')==='9'){
			$query = $this->db->query('SELECT * FROM post WHERE kategori = "Pidana Umum"'); 
            $data['kegiatan'] = $query->result();
		}
        $this->template_admin->load('/admin/template_admin', '/admin/kegiatan', $data);
    }

    public function add()
    {
        $kegiatan = $this->m_post;
        $validation = $this->form_validation;
        $validation->set_rules($kegiatan->rules());

        if ($validation->run()) {
            $kegiatan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->template_admin->load('/admin/template_admin', '/admin/addKegiatan');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/admin_post');
       
        $kegiatan = $this->m_post;
        $validation = $this->form_validation;
        $validation->set_rules($kegiatan->rules());

        if ($validation->run()) {
            $kegiatan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["post"] = $kegiatan->getById($id);
        if (!$data["post"]) show_404();
        
        $this->template_admin->load('/admin/template_admin', '/admin/editKegiatan', $data);
    }

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->m_post->delete($id)) {
            redirect(site_url('admin/admin_post'));
        }
    }
 
    function save(){
        $title = $this->input->post('title',TRUE);
        $contents = $this->input->post('contents',TRUE);
        $this->post_model->insert_post($title,$contents);
        $id = $this->db->insert_id();
        $result = $this->post_model->get_article_by_id($id)->row_array();
        $data['title'] = $result['title'];
        $data['contents'] = $result['contents'];
        $this->load->view('post_detail_view', $data);
    }
 
}