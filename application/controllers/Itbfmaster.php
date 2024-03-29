<?php
	class Itbfmaster extends CI_Controller{
		// New entry
		public function new_entry(){
			$data['title'] = 'Sign Up';
			$this->form_validation->set_rules('user_name', 'User_name', 'required');
      $this->form_validation->set_rules('first_name', 'First_name', 'required');
      $this->form_validation->set_rules('last_name', 'Last_name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
			$this->form_validation->set_rules('password2', 'Confirm Password', 'matches[password]');
			if($this->form_validation->run() === FALSE){
				$this->load->view('templates/header');
				$this->load->view('itbfmaster/new_entry', $data);
				$this->load->view('templates/footer');
			} else {
				// Encrypt password
				$enc_password = md5($this->input->post('password'));
				$this->user_model->register($enc_password);
				// Set message
				$this->session->set_flashdata('user_registered', 'You are now registered and can log in');
				redirect('home');
			}
    }
  }