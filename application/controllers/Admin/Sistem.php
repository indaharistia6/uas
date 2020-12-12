<?php

class Sistem extends CI_Controller{

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('role_id') != '1'){
			$this->session->set_flashdata('pesan','<div class="alert alert-danger alert-dismissible fade show" role="alert">
				  Anda Belum Login!
				  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button>
				</div>');
			redirect('auth/login');
		}
	}
//Awal Tentang Kami
		public function tentang_kami()
		{
			$data['tentang_kami'] = $this->sistem_model->tentang_kami()->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/tentang_kami', $data);
			$this->load->view('templates_admin/footer');
		}

		public function tambah_aksi_tentang_kami()
		{
			$nama_hotel					= $this->input->post('nama_hotel');
			$alamat_tentang_hotel		= $this->input->post('alamat_tentang_hotel');
			$email_tentang_hotel		= $this->input->post('email_tentang_hotel');
			$telp_tentang_hotel			= $this->input->post('telp_tentang_hotel');
			$isi_tentang_hotel			= $this->input->post('isi_tentang_hotel');
			$logo	= $_FILES['logo']['name'];
			if ($logo=''){}else{
				$config ['upload_path']		= './uploads';
				$config ['allowed_types']	= 'jpg|jpeg|png|gif';
				
				$this->load->library('upload',$config);
				if(!$this->upload->do_upload('logo')){
					echo "Gambar Gagal Diupload";
				}else {
					$logo=$this->upload->data('file_name');
				}
			}
			$fb			= $this->input->post('fb');
			$tw			= $this->input->post('tw');
			$gp			= $this->input->post('gp');

			$data = array(
				'nama_hotel'			=> $nama_hotel,
				'alamat_tentang_hotel'	=> $alamat_tentang_hotel,
				'email_tentang_hotel'	=> $email_tentang_hotel,
				'telp_tentang_hotel'	=> $telp_tentang_hotel,
				'isi_tentang_hotel'		=> $isi_tentang_hotel,
				'logo'					=> $logo,
				'fb'					=> $fb,
				'tw'					=> $tw,
				'gp'					=> $gp
			);

			$this->sistem_model->tambah_tentang_kami($data, 'tb_tentang_hotel');
			redirect('admin/sistem/tentang_kami');
		}

		public function edit_tentang_kami($id_tentang_hotel)
		{
			$where = array('id_tentang_hotel' =>$id_tentang_hotel);
			$data['tentang_kami'] = $this->sistem_model->edit_tentang_kami($where, 'tb_tentang_hotel')->result();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/edit_tentang_kami', $data);
			$this->load->view('templates_admin/footer');
		}

		public function update_tentang_kami()
		{
			$nama_hotel					= $this->input->post('nama_hotel');
			$alamat_tentang_hotel		= $this->input->post('alamat_tentang_hotel');
			$email_tentang_hotel		= $this->input->post('email_tentang_hotel');
			$telp_tentang_hotel			= $this->input->post('telp_tentang_hotel');
			$isi_tentang_hotel			= $this->input->post('isi_tentang_hotel');
			$fb							= $this->input->post('fb');
			$tw							= $this->input->post('tw');
			$gp							= $this->input->post('gp');


			$data = array(

				'nama_hotel'			=> $nama_hotel,
				'alamat_tentang_hotel'	=> $alamat_tentang_hotel,
				'email_tentang_hotel'	=> $email_tentang_hotel,
				'telp_tentang_hotel'	=> $telp_tentang_hotel,
				'isi_tentang_hotel'		=> $isi_tentang_hotel,
				'fb'					=> $fb,
				'tw'					=> $tw,
				'gp'					=> $gp
			);

			$where = array(
				'id_tentang_hotel'	=> $id_tentang_hotel
			);

			$this->sistem_model->update_data_tentang_kami($where, $data, 'tb_tentang_hotel');
			redirect('admin/sistem/tentang_kami');
		}
			

		public function saran()
		{
			$data['saran'] = $this->sistem_model->tampil_data();
			$this->load->view('templates_admin/header');
			$this->load->view('templates_admin/sidebar');
			$this->load->view('admin/saran', $data);
			$this->load->view('templates_admin/footer');

		}

		public function hapus_tentang_kami ($id_tentang_hotel)
		{
			$where = array('id_tentang_hotel'	=> $id_tentang_hotel);
			$this->sistem_model->hapus_data_tentang_kami($where, 'tb_tentang_hotel');
			redirect('admin/sistem/tentang_kami');
		}
}