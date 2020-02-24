<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pidum extends CI_Controller
{


	public function index()
	{$data['title'] = "Pidana Umum";
		$data['pidum'] = $this->db->get('pidum')->result_array();
		$this->load->view('/user/_pidum.php', $data);
	}

	public function tilang()
	{$data['title'] = "Pidana Umum";
		$data['tilang'] = $this->db->get('tilang')->result_array();
		$this->load->view('/user/__tilang.php', $data);
	}
}
