<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function index()
	{
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('layout/_navbar');
		$this->load->view('admin/dashboard');
		$this->load->view('layout/_footer');
		$this->load->view('layout/_js');
	}
}
