<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Model {
	
	public function login_val($u)
	{
		$this->db->where('auth_username', $u);
		$sql = $this->db->get('auth');
		return $sql->result();
	}
	
}
