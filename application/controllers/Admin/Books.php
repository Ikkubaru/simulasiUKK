<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
	public function index()
	{
		$this->db->from('book');
		$book = $this->db->get()->result_array();
		$data = array('book' => $book);

		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('layout/_navbar');
		$this->load->view('admin/books',$data);
		$this->load->view('layout/_footer');
		$this->load->view('layout/_js');
	}
	public function add(){
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('layout/_navbar');
		$this->load->view('admin/booksAdd');
		$this->load->view('layout/_footer');
		$this->load->view('layout/_js');
	}
	public function save(){
		$this->load->library('upload');
		$config['upload_path'] = './assets/cover/';
		$config['allowed_types'] = '*';
		
		$this->upload->initialize($config);
		if(!$this->upload->do_upload('cover')) {
			$error = array($this->upload->display_errors());
			print_r($error);
			return;
		} else {
			$cover_data = $this->upload->data();
			$cover_path  = $cover_data['file_name'];
		}
		$data = array(
			'title'	=> $this->input->post('title'),
			'author'	=> $this->input->post('author'),
			'releaseYear'	=> $this->input->post('releaseyear'),
			'synopsis'	=> $this->input->post('synopsis'),
			'cover'		=> $cover_path,
		);
		var_dump($data);
		$this->db->insert('book',$data);
		redirect('admin/books');
	}
	public function delete($bookID){
		$where = array('bookID' => $bookID);
		$this->db->delete('book',$where);
		redirect('admin/books');
	}
	public function edit($bookID){
		$this->db->from('book')->where('bookID',$bookID);
		$book = $this->db->get()->row();
		$data = array('book'	=> $book);
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('layout/_navbar');
		$this->load->view('admin/booksEdit',$data);
		$this->load->view('layout/_footer');
		$this->load->view('layout/_js');
	}
	public function update($bookID){
		$this->load->library('upload');
		$config['upload_path'] = './assets/cover/';
		$config['allowed_types'] = '*';
		$this->upload->initialize($config);
		if(!$this->upload->do_upload('cover')) {
			$error = array($this->upload->display_errors());
			print_r($error);
			return;
		} else {
			$cover_data = $this->upload->data();
			$cover_path  = $cover_data['file_name'];
		}
		$data = array(
			'title'	=> $this->input->post('title'),
			'author'	=> $this->input->post('author'),
			'releaseYear'	=> $this->input->post('releaseYear'),
			'synopsis'	=> $this->input->post('synopsis'),
			'cover'		=> $cover_path,
		);
		$where = array('bookID' => $bookID);
		$this->db->update('book',$data,$where);
	}
}
