<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	public function edit(){
		$this->load->view('profile');	
	}
	public function show(){
		$this->load->view('showUser');
	}
	public function newuser(){
		$this->load->view('create');
	}

}
