<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_admin extends CI_model {


	function check_user_account($email_adm, $password_adm)
		{
			$this->db->select('*');
			$this->db->from('admin');
			$this->db->where('email_adm', $email_adm);
			$this->db->where('password_adm', $password_adm);
			return $this->db->get();
		}

	function select_all()
		{
			$this->db->select('*');
			$this->db->from('developer');
		
			return $this->db->get();
		}

}
