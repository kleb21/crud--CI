<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	
	public function __construct() 
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('User');
	}

	public function index()
	{
		$data['users'] = $this->User->selectAll(); 
		$this->load->view('welcome_message', $data);
	}

	public function addUser(){
		$user['name'] = $this->input->post('name');
		$user['lastN'] = $this->input->post('lastN');
		$user['birth'] = $this->input->post('birth');
		$user['genre'] = $this->input->post('genre');
		$this->User->addUser($user);

		redirect("welcome");
	}

	public function delete($idUser){
		$this->User->delete($idUser);
		
		redirect("welcome");

	}

	public function update($idUser) {
		$user['name'] = $this->input->post('name');
		$user['lastN'] = $this->input->post('lastN');
		$user['birth'] = $this->input->post('birth');
		$user['genre'] = $this->input->post('genre');
		$this->User->update($user, $idUser);

		redirect("welcome");
	}
}
