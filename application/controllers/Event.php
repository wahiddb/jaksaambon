<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Event extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model("m_post");
		$this->load->library('form_validation');
	}

	public function index()
	{	
		$data['title'] = 'Bidang Pembinaan';

		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("kategori","Pembinaan");
		$query2=$this->db->get();
		$data['post'] = $query2->result_array();

		$this->load->view('/user/event.php',$data);
		$this->load->view('/template/submenu_bina.php',$data);
		$this->load->view('/template/event.php',$data);
	}

	public function getId($id)
	{	
		
		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("id_post",$id);
		$query2=$this->db->get();
		$data['pos'] = $query2->result_array();
		

		$this->load->view('/user/post.php',$data);
	}

	public function pidum()
	{	
		$data['title'] = 'Bidang Pidana Umum';

		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("kategori","Pidana Umum");
		$query2=$this->db->get();
		$data['post'] = $query2->result_array();

		$this->load->view('/user/event.php',$data);
		$this->load->view('/template/submenu_bina.php',$data);
		$this->load->view('/template/event.php',$data);
	}
	public function pidsus()
	{	
		$data['title'] = 'Bidang Pidana Khusus';

		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("kategori","Pidana Khusus");
		$query2=$this->db->get();
		$data['post'] = $query2->result_array();

		$this->load->view('/user/event.php',$data);
		$this->load->view('/template/submenu_bina.php',$data);
		$this->load->view('/template/event.php',$data);
	}

	public function bb()
	{	
		$data['title'] = 'Barang Bukti';

		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("kategori","Barang Bukti");
		$query2=$this->db->get();
		$data['post'] = $query2->result_array();

		$this->load->view('/user/event.php',$data);
		$this->load->view('/template/submenu_bina.php',$data);
		$this->load->view('/template/event.php',$data);
	}

	public function pemeriksaan()
	{	
		$data['title'] = 'Bidang Pemeriksa';

		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("kategori","Pemeriksa");
		$query2=$this->db->get();
		$data['post'] = $query2->result_array();

		$this->load->view('/user/event.php',$data);
		$this->load->view('/template/submenu_bina.php',$data);
		$this->load->view('/template/event.php',$data);
	}

	public function datun()
	{	
		$data['title'] = 'Bidang Perdata & Tata Usaha Negara';

		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("kategori","Perdata & Tata Usaha");
		$query2=$this->db->get();
		$data['post'] = $query2->result_array();

		$this->load->view('/user/event.php',$data);
		$this->load->view('/template/submenu_bina.php',$data);
		$this->load->view('/template/event.php',$data);
	}

	public function intelijen()
	{	
		$data['title'] = 'Bidang Intelijen';

		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("kategori","Intelijen");
		$query2=$this->db->get();
		$data['post'] = $query2->result_array();

		$this->load->view('/user/event.php',$data);
		$this->load->view('/template/submenu_bina.php',$data);
		$this->load->view('/template/event.php',$data);
	}

	public function penyuluhan()
	{	
		$data['title'] = 'Penyuluhan Dan Penerangan Hukum';

		$this->db->select('*');
		$this->db->from('post');
		$this->db->where("kategori","Penyuluhan");
		$query2=$this->db->get();
		$data['post'] = $query2->result_array();

		$this->load->view('/user/event.php',$data);
		$this->load->view('/template/submenu_bina.php',$data);
		$this->load->view('/template/event.php',$data);
	}
	
}
