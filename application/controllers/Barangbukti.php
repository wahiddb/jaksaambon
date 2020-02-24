<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barangbukti extends CI_Controller {


	public function index()
	{	$this->db->select('*');
		$this->db->from('barang_bukti');
		$this->db->where("kategori","musnah");
		$query=$this->db->get();
		$data['musnah'] = $query->result_array();
		$data['title'] = "Barang Bukti";
		$this->load->view('/user/_bb.php',$data);
	}

	public function dirampas()
	{$this->db->select('*');
		$this->db->from('barang_bukti');
		$this->db->where("kategori","rampas");
		$query2=$this->db->get();
		$data2['rampas'] = $query2->result_array();
		$data['title'] = "Barang Bukti";
		$this->load->view('/user/_bb2.php',$data2);
	}

	public function kembali()
	{$this->db->select('*');
		$this->db->from('barang_bukti');
		$this->db->where("kategori","kembali");
		$query3=$this->db->get();
		$data3['kembali'] = $query3->result_array();
		$data['title'] = "Barang Bukti";
		$this->load->view('/user/_bb3.php',$data3);
	}

	public function lelang()
	{$this->db->select('*');
		$this->db->from('barang_bukti');
		$this->db->where("kategori","lelang");
		$query4=$this->db->get();
		$data4['lelang'] = $query4->result_array();
		$data['title'] = "Barang Bukti";
		$this->load->view('/user/_bb4.php',$data4);
	}
}
