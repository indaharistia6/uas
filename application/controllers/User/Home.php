<?php

class Home extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '2'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Belum Login!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('auth/login');
		}
    }

    public function saran() {
			$this->load->view('templates/header');
			$this->load->view('templates/sidebar');
			$this->load->view('saran');
			$this->load->view('templates/footer');

    }
    
    public function saran_kirim () {

		$this->form_validation->set_rules('nama_saran','Nama','required');
		$this->form_validation->set_rules('email_saran','Email','required');
		$this->form_validation->set_rules('telp_saran','Telp','required');
		$this->form_validation->set_rules('isi_saran','Isi Kritik/Saran','required');

		if ($this->form_validation->run()==FALSE) {

			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('saran',$data);
			$this->load->view('templates_admin/footer');

		}
		else {

			$in['nama_saran']  	= $this->input->post('nama_saran');
			$in['email_saran']  = $this->input->post('email_saran');
			$in['telp_saran']  	= $this->input->post('telp_saran');
			$in['isi_saran']  	= $this->input->post('isi_saran');

			$this->db->insert('tb_saran',$in);

			$this->session->set_flashdata('sukses','OK');
			redirect("user/home/saran");

		}
	}

	public function tentang_kami()
	{
		$data['tentang_kami'] = $this->home_model->tampil_data()->result();
		$this->load->view('templates/header');
		$this->load->view('templates/sidebar');
		$this->load->view('tentang_kami',$data);
		$this->load->view('templates/footer');
	}

}