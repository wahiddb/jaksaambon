<?php
class M_pegawai extends CI_Model
{
    private $_table = "pegawai";

    public $id_pegawai;
    public $nama;
    public $nip;
    public $jabatan;
    public $bidang;
    public $gol;
    public $pendidikan;
    public $ttl;
    public $phone;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'nama',
            'rules' => 'required'],

            ['field' => 'nip',
            'label' => 'nip',
            'rules' => 'required'],
            
            ['field' => 'jabatan',
            'label' => 'jabatan',
            'rules' => 'required'],

            ['field' => 'bidang',
            'label' => 'bidang',
            'rules' => 'required'],

            ['field' => 'gol',
            'label' => 'gol',
            'rules' => 'required'],
            
            ['field' => 'pendidikan',
            'label' => 'pendidikan',
            'rules' => 'required'],

            ['field' => 'ttl',
            'label' => 'ttl',
            'rules' => 'required'],

            ['field' => 'phone',
            'label' => 'phone',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_pegawai" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pegawai = 'DEFAULT';
        $this->nama = $post["nama"];
        $this->nip = $post["nip"];
        $this->jabatan = $post["jabatan"];
        $this->bidang = $post["bidang"];
        $this->gol = $post["gol"];
        $this->pendidikan = $post["pendidikan"];
        $this->ttl = $post["ttl"];
        $this->phone = $post["phone"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pegawai = $post["id"];
        $this->nama = $post["nama"];
        $this->nip = $post["nip"];
        $this->jabatan = $post["jabatan"];
        $this->bidang = $post["bidang"];
        $this->gol = $post["gol"];
        $this->pendidikan = $post["pendidikan"];
        $this->ttl = $post["ttl"];
        $this->phone = $post["phone"];
        return $this->db->update($this->_table, $this, array('id_pegawai' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pegawai" => $id));
    }
}