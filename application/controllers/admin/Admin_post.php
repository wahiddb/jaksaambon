<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_post extends CI_Controller{
     
    function __construct(){
        parent::__construct();
        $this->load->model("m_post");
        $this->load->library('upload');
    }
 
    function index(){
        $data["kegiatan"] = $this->m_post->getAll();
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