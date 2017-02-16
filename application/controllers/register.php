<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');

	}

	public function index()
	{
		if($this->input->post('submit')){

			$this->form_validation->set_value('name', 'Nama', 'trim|required');
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
			$this->form_validation->set_rules('username', 'Username', 'trim|required');
			$this->form_validation->set_rules('password', 'Password', 'trim|required');

			if ($this->form_validation->run() == TRUE){
				if($this->user_model->insert() == TRUE){
					$data['notif'] = 'Registrasi Berhasil!';
					$this->load->view('register_view', $data);
				} else {
					$data['notif'] = "Registrasi Gagal!";
					$this->load->view('register_view', $data);
				}
			} else {
				$data['notif'] = validation_errors();
				$this->load->view('register_view', $data);
			}
		} else {
			$this->load->view('register_view');
		}
	}

}

/* End of file register.php */
/* Location: ./application/controllers/register.php */