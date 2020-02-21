<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class M_post extends CI_Model{

    private $_table = "tilang";

    public $id_post;
    public $kategori;
    public $judul;
    public $image;
    public $subjudul;
    public $konten;

    public function rules()
    {
        return [
            ['field' => 'kategori',
            'label' => 'kategori',
            'rules' => 'required'],

            ['field' => 'judul',
            'label' => 'judul',
            'rules' => 'required'],
            
            ['field' => 'image',
            'label' => 'image',
            'rules' => 'required'],

            ['field' => 'subjudul',
            'label' => 'subjudul',
            'rules' => 'required'],

            ['field' => 'konten',
            'label' => 'konten',
            'rules' => 'required']
        ];
    }
     
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_post" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_post = uniqid();
        $this->judul = $post["judul"];
		$this->subjudul = $post["subjudul"];
		$this->image = $this->_uploadImage();
        $this->konten = $post["konten"];
		$this->kategori = $post["kategori"];
        $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_post = $post["id"];
        $this->judul = $post["judul"];
		$this->subjudul = $post["subjudul"];
		$this->kategori = $post["kategori"];
		
		
		if (!empty($_FILES["image"]["name"])) {
            $this->image = $this->_uploadImage();
        } else {
            $this->image = $post["old_image"];
		}

        $this->konten = $post["konten"];
        $this->db->update($this->_table, $this, array('id_post' => $post['id']));
    }

    public function delete($id)
    {
		$this->_deleteImage($id);
        return $this->db->delete($this->_table, array("id_post" => $id));
	}
	
	private function _uploadImage()
	{
		$config['upload_path']          = './assets/images';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $this->id_post;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('image')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	private function _deleteImage($id)
	{
		$product = $this->getById($id);
		if ($product->image != "default.jpg") {
			$filename = explode(".", $product->image)[0];
			return array_map('unlink', glob(FCPATH."assets/images$filename.*"));
		}
	}

}