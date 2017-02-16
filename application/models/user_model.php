<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function insert(){
		$data = array(
				'id_user'	=> NULL,
				'name'		=> $this->input->post('name'),
				'email'		=> $this->input->post('email'),
				'username'	=> $this->input->post('username'),
				'password'	=> md5($this->input->post('password')),
			);

		$this->db->insert('user', $data);

		if($this->db->affected_rows() > 0){
			return TRUE;
		} else {
			return FALSE;
		}

	}	

}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */