<?php defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model{	
	function check($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function reg($data,$table){
		$this->db->insert($table,$data);
	}

	public function ambil($email){
		$data = implode($email);
		$query=$this->db->query("SELECT * FROM users WHERE email='$data' LIMIT 1");
		return $query;		
	}

	function update_data($where, $data, $table){
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	function get_data($table){
		
		return $this->db->get($table);
	}

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}
	
	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}
	function data($number,$offset){
		return $query = $this->db->get('blog',$number,$offset)->result();		
	}
	
	function jumlah_data(){
		return $this->db->get('blog')->num_rows();
	}

	function activate($data, $nim){
		$this->db->where('users.email', $email);
		return $this->db->update('users', $data);
	}
	
		//update
	function event_satuan($id_user, $id_event){
		$query=$this->db->query("SELECT * FROM history_acara WHERE id_user=$id_user AND id_event=$id_event");
		return $query;
	}

	function event_terdaftar($email){
		// $data = '$email';
		$query = $this->db->query("call ListAcaraDSC('$email')");
		$result = $query->result();
		// $query->next_result(); 
		// $query->free_result();
		return $result;
	}
	function data_sertifikat($id_history){
		// $data = '$email';
		$query = $this->db->query("call DataSertifikat($id_history)");
		$result = $query->result();
		// $query->next_result(); 
		// $query->free_result();
		return $result;
	}

	//update

}
?>