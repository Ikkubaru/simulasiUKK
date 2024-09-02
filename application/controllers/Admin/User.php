<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function index()
	{
		$this->db->from('user');
		$user = $this->db->get()->result_array();
		$data = array(
			'user'	=> $user,
		);

		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('layout/_navbar');
		$this->load->view('admin/userIndex',$data);
		$this->load->view('layout/_footer');
		$this->load->view('layout/_js');
	}
	public function add(){
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('layout/_navbar');
		$this->load->view('admin/userAdd');
		$this->load->view('layout/_footer');
		$this->load->view('layout/_js');
	}
	public function save(){
		$data = array(
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'fullName' => $this->input->post('fullName'),
			'address' => $this->input->post('address'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'level' => $this->input->post('level'),
		);
		$this->db->insert('user',$data);
		redirect('admin/user');
	}
	public function delete($userID){
		$where = array('userID' => $userID);
		$this->db->delete('user',$where);
		redirect('admin/user');
	}
	public function edit($userID){
		$this->db->from('user')->where('userID',$userID);
		$user = $this->db->get()->row();
		$data = array('user' => $user);

		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('layout/_navbar');
		$this->load->view('admin/userEdit',$data);
		$this->load->view('layout/_footer');
		$this->load->view('layout/_js');
	}
	public function update($userID){
		$data = array(
			'username' => $this->input->post('username'),
			'fullName' => $this->input->post('fullName'),
			'address' => $this->input->post('address'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
		);
		$where = array('userID',$userID);
		var_dump($data, $where);
		die;
		$this->db->update('user',$data, $where);
		redirect('admin/user');
	}
}
