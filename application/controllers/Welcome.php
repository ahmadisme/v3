<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data['title']	=	"SIRUSUN v3.0";
		$this->load->view('header',$data);
		$this->load->view('welcome_message',$data);
		$this->load->view('footer');
	}

	public function login()
	{
		$data['title']	=	"SIRUSUN v3.0";
		
		$this->load->view('login',$data);
	
	}
}
