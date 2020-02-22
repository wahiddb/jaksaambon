<?php
class M_tilang extends CI_Model
{
    private $_table = "tilang";

    public $id_tilang;
    public $nomor_perkara;
    public $pasal;
    public $tersangka;
    public $keterangan;
    public $plat;
    public $tgl_sidang;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'nomor_perkara',
            'label' => 'nomor_perkara',
            'rules' => 'required'],

            ['field' => 'pasal',
            'label' => 'pasal',
            'rules' => 'required'],
            
            ['field' => 'tersangka',
            'label' => 'tersangka',
            'rules' => 'required'],

            ['field' => 'keterangan',
            'label' => 'keterangan',
            'rules' => 'required'],

            ['field' => 'plat',
            'label' => 'plat',
            'rules' => 'required'],

            ['field' => 'tgl_sidang',
            'label' => 'tgl_sidang',
            'rules' => 'required'],

            ['field' => 'status',
            'label' => 'status',
            'rules' => 'required']
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id_tilang" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_tilang = 'DEFAULT';
        $this->pasal = $post["pasal"];
        $this->tersangka = $post["tersangka"];
        $this->nomor_perkara = $post["nomor_perkara"];
        $this->keterangan = $post["keterangan"];
        $this->plat = $post["plat"];
        $this->tgl_sidang = $post["tgl_sidang"];
        $this->status = $post["status"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_tilang = $post["id"];
        $this->pasal = $post["pasal"];
        $this->tersangka = $post["tersangka"];
        $this->nomor_perkara = $post["nomor_perkara"];
        $this->keterangan = $post["keterangan"];
        $this->plat = $post["plat"];
        $this->tgl_sidang = $post["tgl_sidang"];
        $this->status = $post["status"];
        return $this->db->update($this->_table, $this, array('id_tilang' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_tilang" => $id));
    }
}