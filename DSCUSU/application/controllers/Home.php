<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('m_users');
		if($this->session->flashdata('status') == "Error" ){
			echo "<script> alert('Email atau Password anda salah!'); </script>";
		}
		else if($this->session->flashdata('status') == "failVerify" ){
			echo "<script> alert('Maaf, Sepertinya akun anda belum diverifikasi. Silahkan verifikasi lalu Login kembali.'); </script>";
		}
		
		
	}

	public function index(){
		if($this->session->userdata('email') != NULL){
			$where = array($this->session->userdata('email'));
			$data['client'] = $this->m_users->ambil($where)->result();
			$this->load->view('users/home_users',$data);
			
		} else {
			$this->load->view('users/home_users');

		}

	}

	public function profile(){
		if($this->session->userdata('email') != NULL){
			$where = array($this->session->userdata('email'));
			$data['client'] = $this->m_users->ambil($where)->result();

			//Update
			$email = $this->session->userdata('email');
			$data['events'] = $this->m_users->event_terdaftar($email);
			// var_dump($duar);die;
			//Update

			$this->load->view('users/profile',$data);
		} else {
			show_404();
		}
	}

	public function events(){
		if($this->session->userdata('email') != NULL){
			$where = array($this->session->userdata('email'));
			$data['client'] = $this->m_users->ambil($where)->result();
			$data['event'] = $this->m_users->get_data('event')->result();
			$this->load->view('users/events',$data);
		} else {
			$data['event'] = $this->m_users->get_data('event')->result();
			$this->load->view('users/events',$data);
		}
	}

	public function details($id_event){
		if($this->session->userdata('email') != NULL){
			$where = array($this->session->userdata('email'));
			$data['client'] = $this->m_users->ambil($where)->result();
			
		// update			
			$temp = $this->m_users->ambil($where)->result();
			$id_user;
			foreach ($temp as $a) {
				$id_user  = $a->id_user;	
			}
			// var_dump($id_user);die;
			$data['status_event'] = $this->m_users->event_satuan($id_user,$id_event)->result();
			// var_dump($duar);die;
		// update			


			$where = array('id_event' => $id_event);
			$data['event'] = $this->m_users->edit_data($where, 'event')->result();
			
			

			

			$this->load->view('users/event_details',$data);
		} else {
			$where = array($this->session->userdata('email'));
			$data['client'] = $this->m_users->ambil($where)->result();
			$where = array('id_event' => $id_event);

			$data['event'] = $this->m_users->edit_data($where, 'event')->result();

			// update			
			$data['status_event'] = $this->m_users->ambil($where)->result();
			// update			

			$this->load->view('users/event_details',$data);
			
		}
	}

	public function news(){
		if($this->session->userdata('email') != NULL){
			$where = array($this->session->userdata('email'));
			$data['client'] = $this->m_users->ambil($where)->result();

			$data['blog'] = $this->m_users->get_data('blog')->result();
			$this->load->database();
			$jumlah_data = $this->m_users->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'Home/news/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);		
			$data['blog'] = $this->m_users->data($config['per_page'],$from);
			$data['pagination'] = $this->pagination->create_links();
			$this->load->view('users/news',$data);
		} else {
			$data['blog'] = $this->m_users->get_data('blog')->result();
			$this->load->database();
			$jumlah_data = $this->m_users->jumlah_data();
			$this->load->library('pagination');
			$config['base_url'] = base_url().'Home/news/';
			$config['total_rows'] = $jumlah_data;
			$config['per_page'] = 5;
			$from = $this->uri->segment(3);
			$this->pagination->initialize($config);		
			$data['blog'] = $this->m_users->data($config['per_page'],$from);
			$data['pagination'] = $this->pagination->create_links();
			$this->load->view('users/news',$data);
		}
	}
	public function post($id){
		if($this->session->userdata('email') != NULL){
			$where = array($this->session->userdata('email'));
			$data['client'] = $this->m_users->ambil($where)->result();
			$where = array('id' => $id);
			$data['blog'] = $this->m_users->edit_data($where, 'blog')->result();
		// $data['blog'] = $this->m_users->get_data('blog')->result();
			$this->load->view('users/post',$data);
		} else {
			$where = array('id' => $id);
			$data['blog'] = $this->m_users->edit_data($where, 'blog')->result();
		// $data['blog'] = $this->m_users->get_data('blog')->result();
			$this->load->view('users/post',$data);
		}
	}
	function insert(){


		$id_event = $this->input->post('id_event');
		$id_user = $this->input->post('id_user');
		
		//update
		$temp = $this->input->post('kursi');
		$kursi = $temp-1;
		// var_dump($kursi);die;
		$duar = array(
			'kursi'=>$kursi
		);
		$der = array(
			'id_event' => $id_event
		);
		$this->m_users->update_data($der,$duar,'event');
		//update


		$data = array(

			'id_event'		=> $id_event,
			'id_user'		=> $id_user
			
		);


		$this->m_users->insert_data($data, 'history_acara');
		redirect('home/details/'.$id_event);
	}
	// update
	function certificate($id_history){
		$this->load->library('pdf');
		$data=$this->m_users->data_sertifikat($id_history);
		foreach ($data as $key) {

			

			$pdf = new FPDF('L','pt','A4'); 
			//Loading data 
			$pdf->SetTopMargin(20); $pdf->SetLeftMargin(20); $pdf->SetRightMargin(20); 
			$pdf->AddPage(); 
			$x=$key->sertifikat;
			if ($x==NULL) {
				$pdf->Image( base_url('aset/img/serti.jpg'), 5, 10, 840); 
			}else{
				$pdf->Image( base_url('aset/img/'.$x), 5, 10, 840); 	
			}
			$pdf->SetFont('helvetica','B',34); 
			$pdf->SetXY(300,250);
			$nama=$key->nama; 
			$pdf->Cell(250,25,$nama,0,0,'C'); 
			
			$pdf->SetFont('Arial','B',22); 
			$pdf->SetXY(250,340); 
			$judul = $key->nama_event; 
			$pdf->MultiCell(350,18,$judul,0,'C',0); 

			$pdf->SetFont('Arial','',12); 
			$pdf->SetXY(250,400); 
			$waktu = $key->tanggal;
			$tanggalfix=date("D, d F Y", strtotime($waktu)); 
			$pdf->MultiCell(350,14,$tanggalfix,0,'C',0);

			$pdf->SetFont('Arial','',12); 
			$pdf->SetXY(300,430); 
			$tempat = $key->tempat; 
			$pdf->MultiCell(250,19,$tempat,0,'C',0);
			
			// $pdf->SetFont('Arial','B',16); 
			// $pdf->SetXY(370,470); 
			// $signataire = "TheTUTOR"; 
			// $pdf->Cell(350,19,$signataire,"T",0,'C');
			$namafile =  $judul.'_'.$nama.'.pdf';
			$pdf->Output($namafile,'D'); 
		}
	}
	//update
	
}

?>