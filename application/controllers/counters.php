<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Counters extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
	}
	public function index()
	{
		//if session is set, increment by 1
		if($this->session->userdata('boknoy_counter')){
			$counter = $this->session->userdata('boknoy_counter');
			$this->session->set_userdata('boknoy_counter', $counter + 1);
		} else {
			//if session is not set, create it
			$this->session->set_userdata('boknoy_counter', 1);
		}
		$this->load->view('counter');
	}
}
