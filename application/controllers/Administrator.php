<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrator extends CI_Controller {


	function __construct()
		{
			parent::__construct();
			$this->load->model('model_admin');
			$this->load->helper('url');
			$this->load->helper('form');
		}

	public function index()
	{
		//  $logged_in = $this->session->userdata('logged_in');
    //         if (!$logged_in)
    //         {
    //             $this->load->view('admins/login_admin');
		//
    //         }else
    //         {
		// $this->load->view('Admins/index');
		// 	}
			$this->load->view('Admins/index');
	}


	public function login_adm()
		{
			$email_adm 		= $this->input->post('email_adm');
			$password_adm	= $this->input->post('password_adm');
			$temp_account 	= $this->model_admin->check_user_account($email_adm, $password_adm)->row();

			$this->load->library('form_validation');


			$this->form_validation->set_rules('email_adm', 'email_adm', 'required');
			$this->form_validation->set_rules('password_adm', 'password_adm', 'required');

			$num_account 		= count($temp_account);
			$num_email_adm		= count($email_adm);
			$num_password_adm	= count($password_adm);


			if ($this->form_validation->run() == FALSE)
			{
				$this->session->set_flashdata('Konfirmasi','Maaf isi dahulu');
				redirect(site_url('welcome2'));
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

				}elseif ($num_account==0)
				{
					$this->session->set_flashdata('konfirmasi','Maaf , Username atau password salah.');

					redirect(site_url('welcome2'));
				}

			}

		}

		public function logout()
		{
			$this->session->sess_destroy();
			redirect(site_url('welcome2'));
		}

}
