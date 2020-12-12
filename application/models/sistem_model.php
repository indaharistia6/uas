<?php

class sistem_model extends CI_Model {
    //Awal Tentang Kami
	public function tentang_kami(){
		return $this->db->get('tb_tentang_hotel');
	}

	public function tambah_tentang_kami($data, $table){
		$this->db->insert($table,$data);
	}

	public function edit_tentang_kami($where,$table){
		return $this->db->get_where($table,$where);
	}

	public function update_data_tentang_kami($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function hapus_data_tentang_kami($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
    //Akhir Tentang Kami

    public function tampil_data()
	{
		$result = $this->db->get('tb_saran');
		if($result->num_rows() > 0){
			return $result->result();
		} else{
			return FALSE;
		}
	}

}