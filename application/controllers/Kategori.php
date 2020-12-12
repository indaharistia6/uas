<?php 

class Kategori extends CI_Controller{
	public function double()
	{
		$data['double'] = $this->model_kategori->data_double()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('double',$data);
		$this->load->view('templates/footer');
	}

	public function galeri()
	{
		$data['akomodasi'] = $this->model_akomodasi->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('galeri',$data);
		$this->load->view('templates/footer');
	}

}