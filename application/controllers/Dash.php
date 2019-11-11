<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dash extends CI_Controller {

	public function index()
	{
		if (!$this->session->userdata('logged_in')) 
		{
			redirect(base_url().'auth/login');
		}
		$data['title']='Dashboard | NewsPaper';
		$this->load->view('include/header', $data);
		$this->load->view('include/navbar');
		$this->load->view('Dash');
		$this->load->view('include/footer');


	}
	public function addnews()
	{
		if (!$this->session->userdata('logged_in')) 
		{
			redirect(base_url().'auth/login');
		}
		$data['title']='Add news | NewsPaper';
		$this->load->view('include/header', $data);
		$this->load->view('include/navbar');
		$this->load->view('addnewsform');
		$this->load->view('include/footer');

	}
	
	
}
