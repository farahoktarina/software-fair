<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$this->load->view('register/developer');
	}
	public function peserta()
	{
		$this->load->view('register/peserta');
	}
	public function storeDev(){
		$this->load->model('mymodel');
		
	}
	public function storeP(){
		$this->load->model('mymodel');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('kategori','kategori','required');
		if($this->form_validation->run() != false){
			$score=0;
			$kat = $this->input->post('kategori');
			if($kat == 'mhs' )
				{
					$kategori= 'mahasiswa';
				}
			else
			{
				$kategori= 'umum';
			}
			$data = array(
				'pin'=> $this->input->post('pin'),
				'nama_pes'=> $this->input->post('name'),
				'email_pes'=> $this->input->post('email'),
				'status'=> $kategori,
				'score'=> $score
			);
			$this->mymodel->insert('peserta',$data);
			// redirect(base_url(),'refresh');
			redirect('/');
		}
		else{
			redirect('/register');
		}
	}
}
