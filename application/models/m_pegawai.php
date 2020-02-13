<?php
class M_pegawai extends CI_Model{
    public function show_data()
    {
       return $this->db->get('pegawai');
    }
}