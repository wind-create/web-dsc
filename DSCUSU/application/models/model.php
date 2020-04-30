<?php
defined('BASEPATH') or exit ('No direct script access allowed');

class Model extends CI_Model{

	function edit_data($where,$table){
		return $this->db->get_where($table,$where);
	}

	function get_tgl($table){
		$tanggal= date('y-m-d');
		$this->db->where('tgl_terbit<=', $tanggal);
		$this->db->order_by('tgl_terbit', 'desc'); 
		return $this->db->get($table);
	}
	function get_data($table){
		
		return $this->db->get($table);
	}
	function jumlah_data(){
		return $this->db->get('blog')->num_rows();
	}
	function data($number,$offset){
		return $query = $this->db->get('blog',$number,$offset)->result();		
	}

	public function get_user()
	{
		return $this->db->get('users');
	}
	
	public function get_keyword($keyword){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->like('nama',$keyword);
		return $this->db->get()->result();
	}
	public function get_keyword_pesan($keyword){
		$this->db->select('*');
		$this->db->from('pesan');
		$this->db->like('nama',$keyword);
		return $this->db->get()->result();
	}
	public function get_keyword_subscriber($keyword){
		$this->db->select('*');
		$this->db->from('subscriber');
		$this->db->like('email',$keyword);
		return $this->db->get()->result();
	}
	function insert_data($data,$table){
		$this->db->insert($table,$data);
	}
	function select_kategori($kategori)
	{
		$this->db->where('kategori',$kategori);
		return $this->db->get('produk')->result();
	}
	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	function delete_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	
	public function tigatable($aktif) {
		$this->db->select('users.nama,users.email');
		$this->db->from('users');
		$this->db->join('history_acara','history_acara.id_user=users.id_user');
		$this->db->where($aktif);
		$query = $this->db->get();
		return $query->result();
	}
}


?>