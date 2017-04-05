<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Votting extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('mymodel');
		$this->load->library('form_validation');
	}
	public function index()
	{
		$logged_in = $this->session->userdata('logged_in');
					 if (!$logged_in)
					 {
							 $this->load->view('admins/login_admin');

					 }
					 else
					 {
						 $email = $this->session->userdata('email_adm');
						 $where = "where email_adm = '".$email."'";
						 $data['adm'] = $this->mymodel->getDataWhere('admin',$where);
						 $this->template->load('votting','votting',$data);
					 }
		// $this->load->view('votting');
	}
	public function voted(){
		$this->load->model('mymodel');
		$this->form_validation->set_rules('kategori','kategori','required');
		$this->form_validation->set_rules('nim','nim','required');
		$this->form_validation->set_rules('name','name','required');
		$this->form_validation->set_rules('comment','comment','required');
		$this->form_validation->set_rules('vote','vote','required');
		if($this->form_validation->run() != false){
			$kat = $this->input->post('kategori');
			if($kat == 'mhs' )
				{
					$kategori= 'mahasiswa';
					$val=1;
				}
			if($kat == 'sma')	{
				$kategori = 'SMA/SMK';
				$val=1;
			}
			else
			{
				$kategori= 'dosen';
				$val=10;
			}
			$vote=$this->input->post('vote');
				switch ($vote) {
					case 'app1':
						$app ="a11.2014.08175";
						break;
					case 'app2':
						$app ="a11.2014.08644";
						break;
				}
			$id_vot=$this->input->post('nim');
			// mengecek apakah peserta sudah pernah memvotting
			$where3 = "where id_vot = '".$id_vot."'";
			$data3 = $this->mymodel->getDataWhere('voting',$where3);
			$count=count($data3);
			// jika sudah pernah voting
			if($count>0){
				// nanti dibuat halaman informasi kalau nim yang di inputkan duplikat / sudah ada di db
				redirect('/votting');
			}
			// jika tidak ditemukan data yang sama di database
			else{
				$data=array(
					'id_vot'=>$id_vot,
					'nama_vot'=>$this->input->post('name'),
					'status_vot'=>$kategori,
					'comment'=>$this->input->post('comment'),
					'id_dev'=>$app
				);
				// menambahkan data voting
				$this->mymodel->insert('voting',$data);
				// increasing voting di table developer
				$where = "where id_dev = '".$app."'";
				// mengambil nilai voting terkini
				$now=  $this->mymodel->getVotting($where);
				// increasing
				$now=$now+$val;
				$data2=array(
					'voting'=>$now
				);
				$where2=array('id_dev'=>$app);
				// update value voting developer
				$this->mymodel->update('developer',$data2,$where2);
				redirect('/');
			}
		}
		// mengembalikan validasi input yang tidak sesuai
		else{
			redirect('/votting');
		}
	}
}
