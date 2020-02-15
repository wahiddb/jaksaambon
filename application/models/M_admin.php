<?php
class M_admin extends CI_Model
{

    public function validate($username, $password)
        {

            $this->db->select('*');
            $this->db->from('admin');
            $this->db->where('username', $username);
            $this->db->where('password', sha1($password));
            $query = $this->db->get();
            return $query;

        }

}