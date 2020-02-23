<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('/user/index.php');
	}
	public function event()
	{
		$this->load->view('/user/event.php');
	}
	public function input()
	{
		$value = $this->input->post('rating');

		if ($value==1) {
			$data = array(
				'comment'	=> $this->input->post('comment'),
				'kepuasan'	=> 'Sangat Tidak Puas'
			);
			
			
			$this->db->insert('rating', $data);
	
			
			$this->load->library('user_agent');
if ($this->agent->is_referral()){
    print_r($this->agent->referrer());
}
redirect($_SERVER['HTTP_REFERER']);

		}
		if ($value==2) {
			$data = array(
				'comment'	=> $this->input->post('comment'),
				'kepuasan'	=> 'Tidak Puas'
			);
			
			
			$this->db->insert('rating', $data);
	
			$this->load->library('user_agent');
if ($this->agent->is_referral()){
    print_r($this->agent->referrer());
}
redirect($_SERVER['HTTP_REFERER']);
		}
		if ($value==3) {
			$data = array(
				'comment'	=> $this->input->post('comment'),
				'kepuasan'	=> 'Biasa'
			);
			
			
			$this->db->insert('rating', $data);
	
			$this->load->library('user_agent');
if ($this->agent->is_referral()){
    print_r($this->agent->referrer());
}
redirect($_SERVER['HTTP_REFERER']);
		}
		if ($value==4) {
			$data = array(
				'comment'	=> $this->input->post('comment'),
				'kepuasan'	=> 'Puas'
			);
			
			
			$this->db->insert('rating', $data);
	
			$this->load->library('user_agent');
if ($this->agent->is_referral()){
    print_r($this->agent->referrer());
}
redirect($_SERVER['HTTP_REFERER']);
		}
		if ($value==5) {
			$data = array(
				'comment'	=> $this->input->post('comment'),
				'kepuasan'	=> 'Sangat Puas'
			);
			
			
			$this->db->insert('rating', $data);
	
			$this->load->library('user_agent');
if ($this->agent->is_referral()){
    print_r($this->agent->referrer());
}
redirect($_SERVER['HTTP_REFERER']);
		}
		
	}
}
