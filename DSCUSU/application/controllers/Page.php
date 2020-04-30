<?php
defined('BASEPATH') OR exit('No direct script access allowed');
date_default_timezone_set("Asia/Manila"); 

class Page extends MY_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url'));
		$this->load->model('model');
	}

	public function home(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$data['log'] = $this->model->get_data('log')->result();
		$this->load->view('template/backend/header', $data);
		$this->load->view('home', $data);
		$this->load->view('template/backend/footer', $data);
		// $this->render_backend('home'); // load view home.php
	}

	public function berita(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('berita'); // load view berita.php
	}

	public function pengguna(){
		if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
			show_404(); // Redirect ke halaman 404 Not found

		// function render_backend tersebut dari file core/MY_Controller.php
			$data['users'] = $this->model->get_data('users')->result();

			$this->load->view('template/backend/header', $data);
			$this->load->view('pengguna', $data);
			$this->load->view('template/backend/footer', $data);
			
		}

		public function kontak(){
		// function render_backend tersebut dari file core/MY_Controller.php
		$this->render_backend('kontak'); // load view kontak.php
	}
	// function pelanggan/user
	function create_account(){
		$this->load->view('template/backend/header');
		$this->load->view('admin/create_account');
		$this->load->view('template/backend/footer');
		
	}
	function insert(){


		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');

		$data = array(

			'password'		=> $password,
			'nama'		=> $nama,
			'email'	=> $email
		);
		$berita= $this->session->userdata('nama')." telah membuat akun pengguna dengan email ".$email;
		$waktu = date("Y-m-d h:i:sa");
		$log = array(
			'time'=>$waktu,
			'log'=>$berita
		);
		$this->m_users->insert_data($log,'log');
		$this->model->insert_data($data, 'users');
		redirect('page/pengguna');
	}

	function update_users($id_user){
		$where = array('id_user' => $id_user);
		$data['users'] = $this->model->edit_data($where, 'users')->result();
		$this->load->view('template/backend/header', $data);
		$this->load->view('admin/update_users', $data);
		$this->load->view('template/backend/footer', $data);
	}
	function update(){

		$id_user = $this->input->post('id_user');
		$password = $this->input->post('password');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$data = array(
			'id_user'	=> $id_user,
			'password'		=> $password,
			'nama'		=> $nama,
			'email'	=> $email
		);
		$where = array('id_user' => $id_user);
		$this->model->update_data($where, $data, 'users');
		redirect('page/pengguna');
	}
	function delete($id_user){
		$berita= $this->session->userdata('nama')." telah menghapus data pengguna dengan id ".$id_user;
		$waktu = date("Y-m-d h:i:sa");
		$log = array(
			'time'=>$waktu,
			'log'=>$berita
		);
		$this->m_users->insert_data($log,'log');
		$where = array('id_user' => $id_user);
		$this->model->delete_data($where, 'users');
		redirect('page/pengguna');
	}

	
	function search(){
		$keyword = $this->input->post('keyword');
		$data['users']=$this->model->get_keyword($keyword);
		
	}
		//function admin/staff
	function rules(){
		$this->load->view('template/backend/header');
		$this->load->view('rules');
		$this->load->view('template/backend/footer');
		
	}
	public function staff(){
		if($this->session->userdata('role') != 'admin') // Jika user yg login bukan admin
			show_404(); // Redirect ke halaman 404 Not found

		// function render_backend tersebut dari file core/MY_Controller.php
			$data['admin'] = $this->model->get_data('admin')->result();

			$this->load->view('template/backend/header', $data);
			$this->load->view('staff', $data);
			$this->load->view('template/backend/footer', $data);
			
		}

		function create_staff(){
			$this->load->view('template/backend/header');
			$this->load->view('admin/create_staff');
			$this->load->view('template/backend/footer');
			
		}
		function insert_admin(){

			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$role = $this->input->post('role');

			$data = array(
				'username'		=> $username,
				'password'		=> md5($password),
				'nama'		=> $nama,
				'role'	=> $role
			);
			$berita= $this->session->userdata('nama')." telah membuat staff dengan nama ".$nama." dan role ".$role;
			$waktu = date("Y-m-d h:i:sa");
			$log = array(
				'time'=>$waktu,
				'log'=>$berita
			);
			$this->m_users->insert_data($log,'log');
			$this->model->insert_data($data, 'admin');
			redirect('page/staff');
		}

		function update_admin($id){
			$where = array('id' => $id);
			$data['admin'] = $this->model->edit_data($where, 'admin')->result();
			$this->load->view('template/backend/header', $data);
			$this->load->view('admin/update_staff', $data);
			$this->load->view('template/backend/footer', $data);
		}
		function updateAdmin(){

			$id = $this->input->post('id');
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$nama = $this->input->post('nama');
			$role = $this->input->post('role');
			$data = array(
				'id'	=> $id,
				'username'		=> $username,
				'password'		=> md5($password),
				'nama'		=> $nama,
				'role'	=> $role
			);
			$berita= $this->session->userdata('nama')." telah update data admin dengan username".$username;
			$waktu = date("Y-m-d h:i:sa");
			$log = array(
				'time'=>$waktu,
				'log'=>$berita
			);
			$this->m_users->insert_data($log,'log');
			$where = array('id' => $id);
			$this->model->update_data($where, $data, 'admin');
			redirect('page/staff');
		}
		function delete_admin($id){
			$berita= $this->session->userdata('nama')." telah menghapus data admin dengan id ".$id;
			$waktu = date("Y-m-d h:i:sa");
			$log = array(
				'time'=>$waktu,
				'log'=>$berita
			);
			$this->m_users->insert_data($log,'log');
			$where = array('id' => $id);
			$this->model->delete_data($where, 'admin');
			redirect('page/staff');
		}

	//function blog/berita
		function post()
		{
			$data['blog'] = $this->model->get_data('blog')->result();
			$this->load->view('template/backend/header', $data);
			$this->load->view('berita', $data);
			$this->load->view('template/backend/footer', $data);
		}
		function Create_blog(){
			$this->load->view('template/backend/header');
			$this->load->view('admin/Create_blog');
			$this->load->view('template/backend/footer');

		}
		function view_blog($id){
			$where = array('id' => $id);
			$data['blog'] = $this->model->edit_data($where, 'blog')->result();
			$this->load->view('template/backend/header', $data);
			$this->load->view('admin/view_blog', $data);
			$this->load->view('template/backend/footer', $data);
		}
		function Create(){
			$judul = $this->input->post('judul');
			$penulis = $this->input->post('penulis');
			$tgl_terbit = $this->input->post('tgl_terbit');
			$deskripsi = $this->input->post('deskripsi');
			$isi = $this->input->post('isi');
			
			$data = array(
				'judul' => $judul,
				'penulis' => $penulis,
				'tgl_terbit' => $tgl_terbit,
				'deskripsi' => $deskripsi,
				'isi' => $isi
			);
			$berita= $this->session->userdata('nama')." telah membuat berita dengan judul ".$judul;
			$waktu = date("Y-m-d h:i:sa");
			$log = array(
				'time'=>$waktu,
				'log'=>$berita
			);
			$this->m_users->insert_data($log,'log');
			$this->model->insert_data($data,'blog');
			redirect(base_url().'page/post');

		}
		function update_blog($id){
			$where = array('id' => $id);
			$data['blog'] = $this->model->edit_data($where, 'blog')->result();
			$this->load->view('template/backend/header', $data);
			$this->load->view('admin/update_blog', $data);
			$this->load->view('template/backend/footer', $data);
		}
		function blog(){

			$id = $this->input->post('id');
			$judul = $this->input->post('judul');
			$penulis = $this->input->post('penulis');
			$tgl_terbit = $this->input->post('tgl_terbit');
			$deskripsi = $this->input->post('deskripsi');
			$isi = $this->input->post('isi');
			$data = array(
				'id'	=> $id,
				'judul'		=> $judul,
				'penulis'		=> $penulis,
				'tgl_terbit'		=> $tgl_terbit,
				'deskripsi'		=> $deskripsi,
				'isi'	=> $isi
			);
			$berita= $this->session->userdata('nama')." telah update blog dengan judul ".$judul;
			$waktu = date("Y-m-d h:i:sa");
			$log = array(
				'time'=>$waktu,
				'log'=>$berita
			);
			$this->m_users->insert_data($log,'log');
			$where = array('id' => $id);
			$this->model->update_data($where, $data, 'blog');
			redirect('page/post');
		}
		function delete_blog($id){
			$berita= $this->session->userdata('nama')." telah menghapus data blog dengan id ".$id;
			$waktu = date("Y-m-d h:i:sa");
			$log = array(
				'time'=>$waktu,
				'log'=>$berita
			);
			$this->m_users->insert_data($log,'log');
			$where = array('id' => $id);
			$this->model->delete_data($where, 'blog');
			redirect('page/post');
		}

	// function event
		function event(){
			$data['event'] = $this->model->get_data('event')->result();
			$this->load->view('template/backend/header', $data);
			$this->load->view('admin/event', $data);
			$this->load->view('template/backend/footer', $data);
		}
		function view_event($id_event){
			$where = array('id_event' => $id_event);
			$data['event'] = $this->model->edit_data($where, 'event')->result();
			$this->load->view('template/backend/header', $data);
			$this->load->view('admin/view_event', $data);
			$this->load->view('template/backend/footer', $data);
		}
		function peserta($id_event){
			$where = array('id_event' => $id_event);
			$data['event'] = $this->model->edit_data($where, 'event')->result();
			$aktif = array('id_event' => $id_event);
			$data['join3'] = $this->model->tigatable($aktif); 
			$this->load->view('template/backend/header', $data);
			$this->load->view('admin/view_peserta', $data);
			$this->load->view('template/backend/footer', $data);
		}
		function Create_event(){
			$this->load->view('template/backend/header');
			$this->load->view('admin/Create_event');
			$this->load->view('template/backend/footer');

		}
		function Create_acara(){
			$nama_event = $this->input->post('nama_event');
			$tempat = $this->input->post('tempat');
			$tanggal = $this->input->post('tanggal');
			$poster = $this->_uploadImage();
			$sertifikat = $this->_uploadSerti();
			$deskripsi = $this->input->post('deskripsi');
			$kursi = $this->input->post('kursi');
			
			$data = array(
				'nama_event' => $nama_event,
				'tempat' => $tempat,
				'tanggal' => $tanggal,
				'poster' => $poster,
				'sertifikat' => $sertifikat,
				'deskripsi' => $deskripsi,
				'kursi' => $kursi
				
			);
			$berita= $this->session->userdata('nama')." telah membuat jadwal acara dengan judul ".$nama_event;
			$waktu = date("Y-m-d h:i:sa");
			$log = array(
				'time'=>$waktu,
				'log'=>$berita
			);
			$this->m_users->insert_data($log,'log');
			$this->db->set('id_event', 'UUID()', FALSE);
			$this->model->insert_data( $data,'event');
			redirect(base_url().'page/event');

		}

		function update_event($id_event){
			$where = array('id_event' => $id_event);
			$data['event'] = $this->model->edit_data($where, 'event')->result();
			$this->load->view('template/backend/header', $data);
			$this->load->view('admin/update_event', $data);
			$this->load->view('template/backend/footer', $data);
		}
		function event_update(){

			$id_event = $this->input->post('id_event');
			$nama_event = $this->input->post('nama_event');
			$tempat = $this->input->post('tempat');
			$tanggal = $this->input->post('tanggal');
			$poster = $this->_uploadImage();
			$sertifikat = $this->_uploadSerti();
			$deskripsi = $this->input->post('deskripsi');
			$kursi = $this->input->post('kursi');
			
			$data = array(
				'id_event'	=> $id_event,
				'nama_event'		=> $nama_event,
				'tempat'		=> $tempat,
				'tanggal'		=> $tanggal,
				'poster' => $poster,
				'sertifikat' => $sertifikat,
				'deskripsi'		=> $deskripsi,
				'kursi' => $kursi
				
			);
			$berita= $this->session->userdata('nama')." telah update acara dengan judul".$nama_event;
			$waktu = date("Y-m-d h:i:sa");
			$log = array(
				'time'=>$waktu,
				'log'=>$berita
			);
			$this->m_users->insert_data($log,'log');
			$where = array('id_event' => $id_event);
			$this->model->update_data($where, $data, 'event');
			redirect('page/event');
		}
		function delete_event($id_event){
			$berita= $this->session->userdata('nama')." telah menghapus acara dengan id".$id_event;
			$waktu = date("Y-m-d h:i:sa");
			$log = array(
				'time'=>$waktu,
				'log'=>$berita
			);
			$this->m_users->insert_data($log,'log');
			$where = array('id_event' => $id_event);
			$this->model->delete_data($where, 'event');
			redirect('page/event');
		}
		private function _uploadImage()
		{
			$filename = md5(uniqid(rand(), true));
			$config['upload_path']          = './aset/img/';
			$config['allowed_types']        = 'gif|jpg|png';
			$config['file_name']            = $filename;
			$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('poster')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}
	private function _uploadSerti()
	{
		$filename = md5(uniqid(rand(), true));
		$config['upload_path']          = './aset/img/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['file_name']            = $filename;
		$config['overwrite']			= true;
		$config['max_size']             = 1024; // 1MB
		// $config['max_width']            = 1024;
		// $config['max_height']           = 768;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('sertifikat')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}
}

?>
