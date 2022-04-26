<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('Login'))
		{
			redirect('Login');
		}
		
		 $this->load->model('Dashboard_model');
		 // $this->load->model('File_model');
	


	}

	public function index()
	{	
		$this->data['pegawai']	=  $this->Dashboard_model->getAllpegawai();
		$this->data['kegiatan']	=  $this->Dashboard_model->getAllkegiatan();
		$this->data['studi'] 	=  $this->Dashboard_model->getAllstudi();
		$this->data['peminjaman']	=  $this->Dashboard_model->getAllpeminjaman();
		 
		// $this->data['pengguna']=$this->File_model->get_all_dashboard($status);
		
			
		 $judulhalaman = "Dashboard";
		$this->data['judulhalaman'] = $judulhalaman;

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Temp/Dashboard');	
		$this->load->view('Temp/footer');	

	}
	public function home()
	{	
        
		 $judulhalaman = "Home";
		$this->data['judulhalaman'] = $judulhalaman;

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Profile/home');	
		$this->load->view('Temp/footer');	

	}
	public function struktur()
	{	
        
		 $judulhalaman = "Struktur";
		$this->data['judulhalaman'] = $judulhalaman;

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Profile/struktur');	
		$this->load->view('Temp/footer');	

	}
	public function telkomgroup()
	{	
        
		 $judulhalaman = "Telkomgroup";
		$this->data['judulhalaman'] = $judulhalaman;

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Profile/telkom');	
		$this->load->view('Temp/footer');	

	}




	
	
}

?>