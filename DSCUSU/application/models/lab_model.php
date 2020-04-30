<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class lab_model extends CI_Model{

	public function login_user($email, $pass)
	{
		$this->db->where('email', $email);
		$this->db->where('pass', $pass);
		$result=$this->db->get('user');
		if($result->num_rows()==1)
			return $result->row(0)->email;
		else
			return false;
	}

	public function cek_level($email, $pass)
	{
		$this->db->where('email', $email);
		$this->db->where('pass', $pass);
		$result=$this->db->get('user');
		if($result->num_rows()==1)
			return $result->row(2)->level;
		else
			return false;
	}

	public function cekemail($email)
	{
		$this->db->where('email', $email);
		$result=$this->db->get('users');
		if($result->num_rows()>=1)
			return true;
	}
//ini
	public function create_user($data)
	{
		$this->db->insert('users', $data);
	}

	public function getAllUsers(){
		$query = $this->db->get('user');
		return $query->result(); 
	}

	public function insert($user){
		$this->db->insert('user', $user);
		return $this->db->insert_id(); 
	}

	public function getUser($email){
		$query = $this->db->get_where('users',array('email'=>$email));
		return $query->row_array();
	}

	public function activate($data, $email){
		$this->db->where('users.email', $email);
		return $this->db->update('users', $data);
	}
}