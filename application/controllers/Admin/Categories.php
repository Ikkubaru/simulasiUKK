<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {
	public function index()
	{
		$this->db->from('categories');
		$categories = $this->db->get()->result_array();
		$data = array(
			'categories'	=> $categories,
		);

		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('layout/_navbar');
		$this->load->view('admin/categories',$data);
		$this->load->view('layout/_footer');
		$this->load->view('layout/_js');
	}
	public function save(){
		$data = array(
			'categoriesName' => $this->input->post('categoriesName'),
		);
		$this->db->insert('categories',$data);
		redirect('admin/categories');
	}
	public function delete($categoriesID){
		$where = array('categoriesID' => $categoriesID);
		$this->db->delete('categories',$where);
		redirect('admin/categories');
	}
	public function edit($categoriesID){
		$this->db->from('categories')->where('categoriesID',$categoriesID);
		$kategori = $this->db->get()->row();
		$data = array('kategori' => $kategori);

		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('layout/_navbar');
		$this->load->view('admin/categoriesEdit',$data);
		$this->load->view('layout/_footer');
		$this->load->view('layout/_js');
	}
	public function update($categoriesID){
		$data = array(
			'categoriesId' => $categoriesID,
			'categoriesName'	=> $this->input->post('categoriesName'),
		);
		$where = array('categoriesID' => $categoriesID);
		$this->db->update('categories',$data,$where);
		redirect('admin/categories');
	}
}
