<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends CI_Controller {

	public function index()
	{
		# Page attributes
		$data['page'] = 'contact';
		
		# Load the page templates
		$this->load->vars($data);	
		$this->load->view('template');
	}
}

// EOF.