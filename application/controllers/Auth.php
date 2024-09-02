<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}
	public function login(){
		$username = $this->input->post('username');
		$password = md5($this->input->post('password'));

		$this->db->from('user');
		$query = $this->db->get()->row();

		if($username != $query->username){
			echo '<script>alert("Username tidak ditemukan")</script>';
			redirect('auth');
		}elseif($password == $query->password){
			$data = array(
				'id_user'	=> 'id_user',
				'username'	=> 'username',
				'fullName'	=> 'fullName',
				'address'	=> 'address',
				'email'		=> 'email',
				'phone'		=> 'phone'
			);
			$this->session->set_userdata($data);
			redirect('home');
		}else{
			echo '<script>alert("Password Salah")</script>';
			redirect('auth');
		}
	}
}
