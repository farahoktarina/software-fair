<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome2 extends CI_Controller {

	public function index()
	{
		$this->load->view('admins/login_admin');
	}
}
