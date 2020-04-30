<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Client extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_users');
		$this->load->model('lab_model');
		$this->load->model('model');
	}

	public function login(){
		$email = $this->input->post('email');
		$pass  = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($pass)
		);

		$verify = array(
			'email' => $email,
			'active' => TRUE
		);

		$check = $this->m_users->check("users",$where)->num_rows();
		if($check > 0){
			$checkVerify = $this->m_users->check("users",$verify)->num_rows();
			if($checkVerify > 0){
				$nama = $this->db->get('users',$where);
				$session = array(
					'email' => $email,
					'status' => 'Login'
				);
				$this->session->set_userdata($session);
				redirect(base_url("Home"));
			}

			else{
				$session = array(
					'status' => 'failVerify'
				);
				$this->session->set_flashdata($session);
				redirect($_SERVER['HTTP_REFERER']);
			}
		}
		
		else {
			$session = array(
				'status' => 'Error'
			);
			$this->session->set_flashdata($session);
			redirect($_SERVER['HTTP_REFERER']);
		}
	}

	public function update(){
		$this->form_validation->set_rules('nama','Nama','trim|required|regex_match[/^([a-z ])+$/i]');
		$this->form_validation->set_rules('handphone','Nomor Handphone','trim|required|min_length[11]|max_length[13]');
		if($this->form_validation->run()==FALSE) {
			$data = array(
				'status'=> 'Invalid',
				'nama_err'=>form_error('nama'),
				'handphone_err'=>form_error('handphone')
			);
			$this->session->set_flashdata($data);
			redirect($_SERVER['HTTP_REFERER']);
		}

		else{

			$nama = $this->input->post('nama');
			$alamat = $this->input->post('alamat');
			$email = $this->input->post('email');
			$handphone = $this->input->post('handphone');
			$jk = $this->input->post('jenis_kelamin');
			$tgl = $this->input->post('tanggal_lahir');
			$status = $this->input->post('status');
			$medsos = $this->input->post('media_sosial');
			$tipe_keahlian = $this->input->post('tipe_keahlian');
			$keahlian = $this->input->post('keahlian');

			$data = array(
				'nama' => $nama,
				'alamat' => $alamat,
				'email' => $email,
				'handphone' => $handphone,
				'jenis_kelamin' => $jk,
				'tanggal_lahir' => $tgl,
				'status' => $status,
				'media_sosial' => $medsos,
				'tipe_keahlian' => $tipe_keahlian,
				'keahlian' => $keahlian
			);

			$where = array(
				'email' => $email
			);

			$this->m_users->update_data($where,$data,'users');
			redirect(base_url("Home/profile"));
		}
	}

	public function register(){
		$this->form_validation->set_rules('nama','Nama','trim|required|regex_match[/^([a-z ])+$/i]');
		$this->form_validation->set_rules('email','E-Mail','trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_message('is_unique', 'The %s is already registered');
		$this->form_validation->set_rules('password','Password','trim|required|min_length[8]|max_length[16]');

		if($this->form_validation->run()==FALSE) {
			$data = array(
				'status'=> 'Invalid',
				'nama_err'=>form_error('nama'),
				'email_err'=>form_error('email'),
				'pass_err'=>form_error('password')
			);
			$this->session->set_flashdata($data);
			redirect($_SERVER['HTTP_REFERER']);
		} 

		else{

			$set = '123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$code = substr(str_shuffle($set), 0, 12);
			$pass = $this->input->post('password');

			$userPass = array(
				'password' => $pass
			);

			$data = array(
				
				'nama' => $this->input->post('nama'),
				'email' => $this->input-> post('email'),
				'password' => md5($pass),
				'code' => $code,
				'active' => false
			);
			if (!$this->lab_model->cekemail($data['email']))
			{


				$config = array(
					'protocol' => 'smtp',
					'smtp_host' => 'ssl://smtp.googlemail.com',
					'smtp_port' => 465,
		  		'smtp_user' => 'usudscmedan@gmail.com', // change it to yours
		  		'smtp_pass' => 'dscusumedan123', // change it to yours
		  		'smtp_username' => 'armg3295',
		  		'mailtype' => 'html',
		  		'charset' => 'iso-8859-1',
		  		'wordwrap' => TRUE
		  	);

				$message = 	"
				<html>
				<head>
				<title>Activate Account</title>
				</head>
				<body>
				<h4>Dear ".$data['nama'].",</h4>
				<h2>Thank you for registering!</h2>
				<p>You are now a part of Developer Student Clubs Universitas Sumatera Utara.</p>
				<p>Please click the link below to verify your email</p>
				<h4><a href='".base_url()."Client/activate/".$data['email']."/".$code."'>Activate My Account</a></h4>
				<p>Best regards,</p>
				<p><b>DSC USU</b></p>
				</body>
				</html>
				";
				$this->load->library('email', $config);
				$this->email->set_newline("\r\n");
				$this->email->from($config['smtp_user']);
				$this->email->to($data['email']);
				$this->email->subject('Verifikasi Akun DSC');
				$this->email->message($message);

		      //sending email
				if($this->email->send()){
					$this->session->set_flashdata('regSuccess');
				}
				else{
					$this->session->set_flashdata('regFailed');
					
				}

				$this->m_users->reg($data,'users');
				redirect(base_url("Home"));
				
			}
		}
	}
	function fotoprofil(){
		$photo = $this->_uploadfoto();

		$data = array(
			'foto' => $photo
		);

		$where = array(
			'email' => $this->session->userdata('email')
		);
		$this->m_users->update_data($where,$data,'users');
		redirect(base_url("Home/profile"));
	}
	private function _uploadfoto()
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

		if ($this->upload->do_upload('foto')) {
			return $this->upload->data("file_name");
		}
		
		return "default.jpg";
	}

	public function activate(){
		$email =  $this->uri->segment(3);
		$code = $this->uri->segment(4);

		//fetch user details
		$data = $this->lab_model->getUser($email);

		//if code matches
		if($data['code'] == $code){
			//update user active status
			$data['active'] = true;
			$query = $this->lab_model->activate($data, $email);

			if($query){
				$this->session->set_flashdata('message', 'User activated successfully');
			}
			else{
				$this->session->set_flashdata('message', 'Something went wrong in activating account');
			}
		}
		else{
			$this->session->set_flashdata('message', 'Cannot activate account. Code didnt match');
		}

		redirect('Client/register');

	}

	public function logout(){
		$this->session->sess_destroy();
		redirect(base_url("Home"));
	}

	public function change_pass(){
		$oldpass=$this->input->get('oldpass');
		$email=$this->session->userdata('email');
		// var_dump($email);die;
		$pass=$this->input->get('newpass');
		//buat fungsi cek pass lama, caranya md5kan oldpass, run query cek pass
		$where = array(
			'email'=>$email,
			'password' => md5($oldpass)
		);

		$check = $this->m_users->check("users",$where)->num_rows();

		// var_dump($oldpass);die;
		// var_dump($pass);die;		 

		if($pass==NULL){
			//pass baru belum diisi
			redirect(base_url("Home/profile"));

		}
		elseif($oldpass==NULL){
			//pass baru belum diisi
			redirect(base_url("Home/profile"));
		}
		//buat kondisi jika oldpass==NULL, return pass lama salah
		elseif($check==NULL){
			//buat fungsi salah password
			redirect(base_url("Home/profile"));
		}
		//jika oldpass==!NULL dan oldpass==newpass, return pass baru sama dengan pass lama
		elseif($oldpass==!NULL && $oldpass==$pass){
			//password sama
			redirect(base_url("Home/profile"));
		}else{
		//else masukin data ke database

			$data=array(
				'password' => md5($pass)
			);
			$where=array(
				'email' => $email
			);
			$this->m_users->update_data($where,$data,'users');
			$this->session->sess_destroy();
			$this->session->set_flashdata('passChanged');
			redirect(base_url("Home"));
		}
	}
}

?>
