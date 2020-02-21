<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Admin_post extends CI_Controller{
     
    function __construct(){
        parent::__construct();
        $this->load->model("m_post");
        $this->load->library('upload');
    }
 
    function index(){
        $this->template_admin->load('/admin/template_admin', '/admin/kegiatan');
    }

    public function add()
    {
        $post = $this->m_post;
        $validation = $this->form_validation;
        $validation->set_rules($post->rules());

        if ($validation->run()) {
            $post->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->template_admin->load('/admin/template_admin', '/admin/addKegiatan');
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/admin_post');
       
        $post = $this->m_post;
        $validation = $this->form_validation;
        $validation->set_rules($post->rules());

        if ($validation->run()) {
            $post->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["post"] = $post->getById($id);
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
 
    //Upload image summernote
    function upload_image(){
        if(isset($_FILES["image"]["name"])){
            $config['upload_path'] = './assets/images/';
            $config['allowed_types'] = 'jpg|jpeg|png|gif';
            $this->upload->initialize($config);
            if(!$this->upload->do_upload('image')){
                $this->upload->display_errors();
                return FALSE;
            }else{
                $data = $this->upload->data();
                //Compress Image
                $config['image_library']='gd2';
                $config['source_image']='./assets/images/'.$data['file_name'];
                $config['create_thumb']= FALSE;
                $config['maintain_ratio']= TRUE;
                $config['quality']= '60%';
                $config['width']= 800;
                $config['height']= 800;
                $config['new_image']= './assets/images/'.$data['file_name'];
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                echo base_url().'assets/images/'.$data['file_name'];
            }
        }
    }
 
    //Delete image summernote
    function delete_image(){
        $src = $this->input->post('src');
        $file_name = str_replace(base_url(), '', $src);
        if(unlink($file_name))
        {
            echo 'File Delete Successfully';
        }
    }
}