<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Developer extends CI_Controller {


	function __construct()
		{
			parent::__construct();
			$this->load->model('model_developer');
			$this->load->model('mymodel');
			$this->load->helper('url');
			$this->load->helper('form');
		}

	public function index()
	{
		 $logged_in = $this->session->userdata('logged_in');


            if (!$logged_in)
            {
                $this->load->view('developers/login_developer');

            }else
            {
							$id_dev = $this->session->userdata('id_dev');
							$where = "where id_dev = '".$id_dev."'";
							$data['dev'] = $this->mymodel->getDataWhere('developer',$where);
							$this->template->load('developers/index','developers/index',$data);
			}
		// $data['dev'] = $this->mymodel->getData('developer');
		// $this->template->load('developers/index','developers/index',$data);

	}

	public function check(){
		$this->load->view('developers/check');
	}
	public function check_pin(){

		$pin=$this->input->post('pin');
		$where = "where pin = '".$pin."'";
		$data = $this->mymodel->getDataWhere('peserta',$where);
		$count=count($data);
		if($count>0){

			redirect('developer/point/'.$pin);
		}
		else{
			redirect('developer/check');
		}
	}

	public function point($pin){
		$where = "where pin = '".$pin."'";
		$data ['peserta']= $this->mymodel->getDataWhere('peserta',$where);
		$this->template->load('developers/point','developers/point',$data);
		// $this->load->view('developers/point');
	}

	public function give_point($pin){
		$point=$this->input->post('point');
		if($point=='normal'){
			$score=40;
		}
		else{
			$score=60;
		}
		$where = "where pin = '".$pin."'";
		$now=  $this->mymodel->getScore($where);
		$now=$now+$score;
		$data=array(
			'score'=>$now
		);
		$where2=array('pin'=>$pin);
		$this->mymodel->update('peserta',$data,$where2);
		// decreasing saldo developer
		$id_dev = $this->session->userdata('id_dev');
		$where3 = "where id_dev = '".$id_dev."'";
		$saldo=  $this->mymodel->getSaldo($where3);
		$saldo = $saldo - $score;
		$data2=array(
			'saldo'=>$saldo
		);
		$where4=array('id_dev'=>$id_dev);
		$this->mymodel->update('developer',$data2, $where4);
		redirect('/developer');
	}

	public function login_dev()
		{
			$email_dev 		= $this->input->post('email_dev');
			$password_dev	= md5($this->input->post('password_dev'));
			$temp_account 	= $this->model_developer->check_user_account($email_dev, $password_dev)->row();

			$this->load->library('form_validation');


			$this->form_validation->set_rules('email_dev', 'email_dev', 'required');
			$this->form_validation->set_rules('password_dev', 'password_dev', 'required');

			$num_account 		= count($temp_account);
			$num_email_dev		= count($email_dev);
			$num_password_dev	= count($password_dev);


			if ($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('Konfirmasi','Maaf isi dahulu');
				redirect(site_url('Developer'));
			}else
			{
				if ($num_account > 0)
				{

					$array_items = array(
						'id_dev' 		=> $temp_account->id_dev,
						'password_dev' 	=> $temp_account->password_dev,
						'nama_dev'		=> $temp_account->nama_dev,
						'email_dev'		=> $temp_account->email_dev,
						'hp_dev'		=> $temp_account->hp_dev,
						'jenis_app'		=> $temp_account->jenis_app,
						'deskripsi_app'	=> $temp_account->deskripsi_app,
						'nama_app'		=> $temp_account->nama_app,
						'saldo'			=> $temp_account->saldo,
						'voting'		=> $temp_account->voting,
						'created_at'=> $temp_account->created_at,

						'logged_in' => true
					);

					$this->session->set_userdata($array_items);
					redirect(site_url('Developer/index'));

				}elseif ($num_account==0)
				{
					$this->session->set_flashdata('konfirmasi','Maaf , Username atau password salah.');

					redirect('Developer/index');
				}

			}

		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect(site_url('/'));
		}

}
