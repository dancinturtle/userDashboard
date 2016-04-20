<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registers extends CI_Controller {
	public function __construct(){
		parent::__construct();
	}
	public function index(){	
		$this->load->view('register');
	}
	public function check(){
		//will gather up data and pass it to model, but when all goes well, will go to method in the signins, which will go to dashboard index.
		redirect ('/signins/success');
	}
}

