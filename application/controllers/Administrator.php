<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {


	function __construct()
		{
			parent::__construct();
			$this->load->model('model_admin');
			$this->load->model('mymodel');
			$this->load->helper('url');
			$this->load->helper('form');
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
							$this->template->load('admins/index','admins/index',$data);
						}
	}

	public function login_adm()
		{
			$email_adm 		= $this->input->post('email_adm');
			$password_adm	= md5($this->input->post('password_adm'));
			$temp_account 	= $this->model_admin->check_user_account($email_adm, $password_adm)->row();

			$this->load->library('form_validation');
			$this->form_validation->set_rules('email_adm', 'email_adm', 'required');
			$this->form_validation->set_rules('password_adm', 'password_adm', 'required');

			$num_account 		= count($temp_account);
			// $num_email_adm		= count($email_adm);
			// $num_password_adm	= count($password_adm);


			if ($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('Konfirmasi','Maaf isi dahulu');
				redirect(site_url('administrator'));
			}else
			{
				if ($num_account > 0)
				{

					$array_items = array(
						'id_adm' 		=> $temp_account->id_adm,
						'email_adm'		=> $temp_account->email_adm,
						'password_adm' 	=> $temp_account->password_adm,

						'logged_in' => true
					);

					$this->session->set_userdata($array_items);
					redirect(site_url('Administrator/index'));

				}else
				{
					$this->session->set_flashdata('konfirmasi','Maaf , Username atau password salah.');

					redirect('Administrator/index');
				}

			}
		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect(site_url('/'));
		}

		public function tampilsaldo()
		{
			$logged_in = $this->session->userdata('logged_in');


			if (!$logged_in)
			{
				redirect(site_url('welcome2'));

			}else
			{
				$order='voting';
				$inc='desc';
				$data['data_saldo'] = $this->model_admin->select_all($order,$inc);
				$this->load->view('admins/tampil_datasaldo',$data);
			}
		}

		public function tampilvoting()
		{
			$logged_in = $this->session->userdata('logged_in');


			if (!$logged_in)
			{
				redirect(site_url('welcome2'));

			}else
			{
				$order='voting';
				$inc='desc';
				$data['data_voting'] = $this->model_admin->select_all($order,$inc);
				$this->load->view('admins/tampil_datavoting',$data);
			}
		}

		public function tampilscore()
		{
			$logged_in = $this->session->userdata('logged_in');


			if (!$logged_in)
			{
				redirect(site_url('welcome2'));

			}else
			{
				$order='voting';
				$inc='desc';
				$data['data_saldo'] = $this->model_admin->select_all($order,$inc);
				$this->load->view('admins/tampil_datascore',$data);
			}
		}
		public function check(){
			$logged_in = $this->session->userdata('logged_in');
						 if (!$logged_in)
						 {
								 $this->load->view('developers/login_developer');

						 }else
						 {
							 $email = $this->session->userdata('email_adm');
 							$where = "where email_adm = '".$email."'";
 							$data['adm'] = $this->mymodel->getDataWhere('admin',$where);
							$this->template->load('admins/check','admins/check',$data);
			 }
		}
		public function check_pin(){
			$pin=$this->input->post('pin');
			$where = "where pin = '".$pin."'";
			$data = $this->mymodel->getDataWhere('peserta',$where);
			$count=count($data);
			if($count>0){
				redirect('administrator/point/'.$pin);
			}
			else{
				redirect('administrator/check');
			}
		}
		public function point($pin){
			$where = "where pin = '".$pin."'";
			$data ['peserta']= $this->mymodel->getDataWhere('peserta',$where);
			$this->template->load('admins/point','admins/point',$data);
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

			redirect('Administrator');
		}
}
