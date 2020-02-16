<?php
class M_intel extends CI_Model
{
    private $_table = "intel";

    public $id_intel;
    public $pelapor;
    public $terlapor;
    public $identitas;
    public $no_identitas;
    public $email;
    public $tindak_pidana;
    public $keterangan;
    public $status;

    public function rules()
    {
        return [
            ['field' => 'pelapor',
            'label' => 'pelapor',
            'rules' => 'required'],

            ['field' => 'terlapor',
            'label' => 'terlapor',
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

            ['field' => 'tindak_pidana',
            'label' => 'tindak_pidana',
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
        return $this->db->get_where($this->_table, ["id_intel" => $id])->row();
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_intel = $post["id"];
        $this->terlapor = $post["terlapor"];
        $this->identitas = $post["identitas"];
        $this->pelapor = $post["pelapor"];
        $this->no_identitas = $post["no_identitas"];
        $this->email = $post["email"];
        $this->tindak_pidana = $post["tindak_pidana"];
        $this->keterangan = $post["keterangan"];
        $this->status = $post["status"];
        return $this->db->update($this->_table, $this, array('id_intel' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_intel" => $id));
    }
}