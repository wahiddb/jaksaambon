<?php
class M_datun extends CI_Model
{
    private $_table = "datun";

    public $id_datun;
    public $pemohon;
    public $email;
    public $perihal;
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'pemohon',
            'label' => 'pemohon',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],
            
            ['field' => 'perihal',
            'label' => 'perihal',
            'rules' => 'required'],
            
            ['field' => 'keterangan',
            'label' => 'keterangan',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_datun" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_datun = $post["id"];
        $this->pemohon = $post["pemohon"];
        $this->email = $post["email"];
        $this->perihal = $post["perihal"];
        $this->keterangan = $post["keterangan"];
        return $this->db->update($this->_table, $this, array('id_datun' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_datun" => $id));
    }
}