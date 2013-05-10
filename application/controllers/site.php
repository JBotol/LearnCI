<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Site extends CI_Controller {
	public function index()
	{
		$data['nama'] = 'Heintje';
		$data['alamat'] = 'Malang';
		
		$this->load->model('user_model');
		$data['user'] = $this->user_model->get();
		
		$this->load->view('halaman_satu',$data);
	}
	public function tambah()
	{	
		// ..\xampp\htdocs\ci\system\helper\form_helper.php
		$this->load->helper('form');
		$this->load->view('form_add');
	}
	
	public function simpan()
	{
		$this->load->model('user_model');
		$data = array(
					'nrp'=>$this->input->post('nrp'),
					'nama'=>$this->input->post('nama'),
					'password'=>$this->input->post('password'),
					'gender'=>$this->input->post('gender')
					);
		$this->user_model->simpan($data);
		redirect('site/tambah');
	}
	
	public function delete($nrp){
		$this->load->helper('form');
		$data['user'] = $nrp;
		$this->load->view('form_confirmation',$data);
	}	
	
	public function edit($nrp){
		$this->load->helper('form');
		$this->load->model('user_model');
		$data['user'] = $this->user_model->getRec($nrp);
		$this->load->view('form_edit',$data);
	}	
	
	public function koreksi(){
		$this->load->model('user_model');
		$data = array(
					'nrp'=>$this->input->post('nrp'),
					'nama'=>$this->input->post('nama'),
					'password'=>$this->input->post('password'),
					'gender'=>$this->input->post('gender')
					);
		$this->user_model->koreksi($data);
		$this->load->helper('url');
		redirect('site');
	}

	public function hapus(){
		if ($this->input->post('hapus') == 'Ok'){
			$this->load->model('user_model');
			$data = array(
				'nrp' => $this->input->post('nrp'),
			);
			$this->user_model->hapus($data);
		}
		$this->load->helper('url');
		redirect('site');
	}

	public function index_id()
	{
		$data['nama'] = 'Heintje';
		$data['alamat'] = 'Malang';

		$this->load->model('user_model');
		$data['user'] = $this->user_model->sort_id();
		
		$this->load->view('halaman_satu',$data);
	}

	public function index_nama()
	{
		$data['nama'] = 'Heintje';
		$data['alamat'] = 'Malang';

		$this->load->model('user_model');
		$data['user'] = $this->user_model->sort_nama();
		
		$this->load->view('halaman_satu',$data);
	}
}

/* End of file site.php */
/* Location: ./application/controllers/site.php */