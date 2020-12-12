<?php

class home_model extends CI_Model {

	//Awal tentang Kami
	function tampil_data() {
		return $this->db->get('tb_tentang_hotel');;
    }
}