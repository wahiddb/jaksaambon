<?php
class M_barbuk extends CI_Model
{
    private $_table = "barang_bukti";

    public $id_bb;
    public $tersangka;
    public $no_perkara;
    public $jenis;
    public $jumlah;
    public $status;
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'tersangka',
            'label' => 'tersangka',
            'rules' => 'required'],

            ['field' => 'no_perkara',
            'label' => 'no_perkara',
            'rules' => 'required'],
            
            ['field' => 'jenis',
            'label' => 'jenis',
            'rules' => 'required'],

            ['field' => 'jumlah',
            'label' => 'jumlah',
            'rules' => 'numeric'],

            ['field' => 'status',
            'label' => 'status',
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
        return $this->db->get_where($this->_table, ["id_bb" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_bb = 'DEFAULT';
        $this->tersangka = $post["tersangka"];
        $this->no_perkara = $post["no_perkara"];
        $this->jenis = $post["jenis"];
        $this->jumlah = $post["jumlah"];
        $this->status = $post["status"];
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_bb = $post["id"];
        $this->no_perkara = $post["no_perkara"];
        $this->jenis = $post["jenis"];
        $this->tersangka = $post["tersangka"];
        $this->jumlah = $post["jumlah"];
        $this->status = $post["status"];
        $this->keterangan = $post["keterangan"];
        return $this->db->update($this->_table, $this, array('id_bb' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_bb" => $id));
    }
}