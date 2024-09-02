$config['upload_path'] = './ass'
$config['allowed_types'] 'gif|jpg|png';
$config['max_size'] = 2048;

$this->upload->initialize($config);
if(!$this->upload->do_upload('cover')) {
	$error = array($this->upload->display_errors());
	print_r($error);
	return;
} else {
	$cover_data = $this->upload->data();
	$cover_path  = $cover_data['file_name'];
}

$cover 							= date('Y-m-d') .'.png';
		$config['allowed_types']		='*';
		$config['max_size']				= 1024*1024;
		$config['upload_path']			='./assets/cover/';
		$config['file_name']			= $cover;
		$this->load->library('upload',$config);
		if ( ! $this->upload->do_upload('cover'))
                {
                    $error = array('error' => $this->upload->display_errors());
                }else{
					$data = array('upload_data' => $this->upload->data());
				}
		$data = array(
			'title'			=> $this->input->post('title'),
			'author'		=> $this->input->post('author'),
			'releaseyear'	=> $this->input->post('releaseyear'),
			'synopsis'		=> $this->input->post('synopsis'),
			'cover'			=> $cover
		);
