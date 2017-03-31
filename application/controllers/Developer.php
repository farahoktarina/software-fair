<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends CI_Controller {

	public function index()
	{
		$this->load->view('developers/index');
	}
	public function charts(){
		$this->load->view('developers/charts');
	}
}
