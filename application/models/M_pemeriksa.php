<?php
class M_pemeriksa extends CI_Model
{
    private $_table = "pemeriksa";

    public $id_pemeriksa;
    public $pelapor;
    public $identitas;
    public $no_identitas;
    public $email;
    public $terlapor;
    public $pelanggaran;
    public $keterangan;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'pelapor',
            'label' => 'pelapor',
            'rules' => 'required'],
            
            ['field' => 'identitas',
            'label' => 'identitas',
            'rules' => 'required'],

            ['field' => 'no_identitas',
            'label' => 'no_identitas',
            'rules' => 'required'],

            ['field' => 'email',
            'label' => 'email',
            'rules' => 'required'],

            ['field' => 'terlapor',
            'label' => 'terlapor',
            'rules' => 'required'],

            ['field' => 'pelanggaran',
            'label' => 'pelanggaran',
            'rules' => 'required'],
            
            ['field' => 'keterangan',
            'label' => 'keterangan',
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
        return $this->db->get_where($this->_table, ["id_pemeriksa" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pemeriksa = $post["id"];
        $this->terlapor = $post["terlapor"];
        $this->identitas = $post["identitas"];
        $this->pelapor = $post["pelapor"];
        $this->no_identitas = $post["no_identitas"];
        $this->email = $post["email"];
        $this->pelanggaran = $post["pelanggaran"];
        $this->keterangan = $post["keterangan"];
        $this->status = $post["status"];
        return $this->db->update($this->_table, $this, array('id_pemeriksa' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pemeriksa" => $id));
    }
}