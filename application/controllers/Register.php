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

	public function admin()
	{
		$this->load->view('register/admin');
	}

	// method untuk menyimpan data admin
	public function storeA(){
		$this->load->model('mymodel');
		$this->form_validation->set_rules('email_adm','email_adm','required');
		$this->form_validation->set_rules('password_adm','password_adm','required');
		if($this->form_validation->run() != false){
			
			$data = array(
				'email_adm'=> $this->input->post('email_adm'),
				'password_adm'=>md5($this->input->post('password_adm'))
			);
			$this->mymodel->insert('admin',$data);
			// redirect(base_url(),'refresh');
			redirect('/administrator');
		}
		else{
			redirect('/register/admin');
		}
	}





	// method untuk menyimpan data developer
	public function storeDev(){
		$this->load->model('mymodel');
		// validasi inputan dari form
		$this->form_validation->set_rules('nim','nim','required');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('email','email','required');
		$this->form_validation->set_rules('telp','telp','required');
		$this->form_validation->set_rules('type','type','required');
		$this->form_validation->set_rules('name-app','name-app','required');
		$this->form_validation->set_rules('deskripsi','deskripsi','required');
		// mengambil value dari option select
		if($this->form_validation->run() != false){
			$type=$this->input->post('type');
			switch ($type) {
				case 'mobile':
					$jenis='mobile';
					break;
				case 'web':
					$jenis='web';
					break;
				case 'dekstop':
					$jenis='dekstop';
					break;
				case 'game':
					$jenis='game';
					break;
			}
			$saldo=3000;
			$voting=0;
			$nim=$this->input->post('nim');
			// mengecek apakah data yang di subtmit sudah ada di dayabase
			$where = "where id_dev = '".$nim."'";
			$data = $this->mymodel->getDataWhere('developer',$where);
			// kondisi ketika ditemukan data yang sama di database
			$count=count($data);
			if($count>0){
				// nanti dibuat halaman informasi kalau nim yang di inputkan duplikat / sudah ada di db
				redirect('/register');
			}
			// jika tidak ditemukan data yang sama di database
			else{
				$data = array(
					'id_dev'=> $nim,
					'nama_dev'=> $this->input->post('name'),
					'email_dev'=> $this->input->post('email'),
					'hp_dev'=> $this->input->post('telp'),
					'jenis_app'=>$jenis,
					'nama_app'=> $this->input->post('name-app'),
					'deskripsi_app'=> $this->input->post('deskripsi'),
					'saldo'=> $saldo,
					'voting'=> $voting,
					// password gabungan dari SF2017 + nim yang diinputkan
					'password_dev'=>md5('SF2017'.$nim)
				);
				$this->mymodel->insert('developer',$data);
				redirect('/');
			}
		}
		// mengembalikan validasi input yang tidak sesuai
		else{
			redirect('/register');
		}
	}
	// method untuk menyimpan data peserta gamification
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
