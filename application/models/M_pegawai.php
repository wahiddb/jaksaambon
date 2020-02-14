<?php
class M_pegawai extends CI_Model
{

    function hapus_pegawai($id)
        {
            $hsl = $this->db->query("DELETE FROM pegawai where id_pegawai='$id'");
            return $hsl;
        }

    function update_pegawai($id, $nama, $nip, $jabatan, $bidang, $gol, $pendidikan, $ttl, $phone)
        {
            $hsl = $this->db->query("UPDATE pegawai SET nama='$nama',nip='$nip',jabatan='$jabatan',bidang='$bidang',gol='$gol',pendidikan='$pendidikan',ttl=$ttl,phone='$phone' WHERE id_pegawai='$id'");
            return $hsl;
        }

	function tampil_pegawai()
        {
            $hsl = $this->db->query("SELECT * FROM pegawai");
            return $hsl;
        }
    function add_pegawai($id,$nama,$nip,$jabatan,$bidang,$gol,$pendidikan,$ttl,$phone)
        {
            $hsl = $this->db->query("INSERT INTO pegawai (id_pegawai, nama, nip, jabatan, bidang, gol, pendidikan, ttl, phone) VALUES (DEFAULT,'$nama','$nip','$jabatan','$bidang', '$gol','$pendidikan','$ttl','$phone')");
            return $hsl;
        }
}