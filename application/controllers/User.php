<?php

/**
* 
*/
class User extends CI_Controller
{

	//tentar entrar sem estar logged
	public function __construct(){
		parent::__construct();
		if($_SESSION['user_logged'] == FALSE){

			$this->session->set_flashdata("error","Please login first to view page");
			redirect("app/login");
		}
	}


	public function profile(){

		$this->load->view('profile');
	}
	
}