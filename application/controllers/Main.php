<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	/**
	 * Index method. It loads Homepage
	 */
	public function index()
	{	
		$data['title']='NewsPaper | We provide News';
		$this->load->view('include/header', $data);
		$this->load->view('include/navbar');
		$this->load->view('home');
		$this->load->view('include/footer');
	}

	/**
	 * Dashboard method. it is accessible only to admin
	 */
	

	/**
	 * Login Method. Loads Login Form
	 */
	

}
