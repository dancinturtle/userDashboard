<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signins extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){	
		$this->load->view('signin');
	}
	public function success(){
		redirect('/dashboards/index');
	}
	public function admin(){
		redirect('/dashboards/admin');
	}
}