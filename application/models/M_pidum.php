<?php
class M_pidum extends CI_Model
{
    private $_table = "pidum";

    public $id_pidum;
    public $nomor_perkara;
    public $pasal;
    public $tersangka;
    public $status;
    public $keterangan;

    public function rules()
    {
        return [
            ['field' => 'no_perkara',
            'label' => 'no_perkara',
            'rules' => 'required'],

            ['field' => 'pasal',
            'label' => 'pasal',
            'rules' => 'required'],
            
            ['field' => 'tersangka',
            'label' => 'tersangka',
            'rules' => 'required'],

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
        return $this->db->get_where($this->_table, ["id_pidum" => $id])->row();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->id_pidum = 'DEFAULT';
        $this->nomor_perkara = $post["no_perkara"];
        $this->pasal = $post["pasal"];
        $this->tersangka = $post["tersangka"];
        $this->status = $post["status"];
        $this->keterangan = $post["keterangan"];
        return $this->db->insert($this->_table, $this);
    }

    public function update()
    {
        $post = $this->input->post();
        $this->id_pidum = $post["id"];
        $this->nomor_perkara = $post["no_perkara"];
        $this->pasal = $post["pasal"];
        $this->tersangka = $post["tersangka"];
        $this->status = $post["status"];
        $this->keterangan = $post["keterangan"];
        return $this->db->update($this->_table, $this, array('id_pidum' => $post['id']));
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_pidum" => $id));
    }
}