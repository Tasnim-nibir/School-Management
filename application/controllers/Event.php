<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	
	public function index()
	{
		$this->load->view('inc/header');
		 $this->load->view('event');
		 $this->load->view('inc/footer');
		
	}


}
