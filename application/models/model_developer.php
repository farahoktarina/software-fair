<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_developer extends CI_model {


	function check_user_account($email_dev, $password_dev)
		{
			$this->db->select('*');
			$this->db->from('developer');
			$this->db->where('email_dev', $email_dev);
			$this->db->where('password_dev', $password_dev);
			return $this->db->get();
		}

}
