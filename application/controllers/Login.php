<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		

		$this->data['extra'] = "Login";
		$this->data['judulhalaman'] = "Login";
		$this->load->model('Pegawai_model');
		$this->load->model('Akademik_model');
		
 
	}

	public function index()
	{

			$this->load->view('Login', $this->data);
	

	}

	public function autentication()
	{
		$nip = $this->input->post('nip');
		$password = $this->input->post('password');
		$jabatan = $this->input->post('jabatan');
		 
		 if ($jabatan == 1) {
			$cek=$this->Pegawai_model->cek_login($nip, md5($password));

			if($cek!= null)
			{			
				$unit_pegawai = $cek->jabatan;
				$password = $cek->password;	
				$nip = $cek->nip;
				$nama = $cek->nama_pegawai;
				$id = $cek->id_pegawai;
				
				$this->session->set_userdata(array(
					'Login' => true,
					'nama' => $nama,
					'id' => $id,
					'nip' => $nip,
					'unit_pegawai' => $unit_pegawai,
					'jabatan' => $unit_pegawai,
					'password'=> $password));						
				
				  redirect('Dashboard');
			}
			else
			{
				$this->session->set_flashdata('login','login tidak berhasil <br> username dan password salah');
				redirect('login');
			} 	
		 }
		 else{
			$cek=$this->Akademik_model->cek_login($nip, md5($password));

			if($cek!= null)
			{			
				$unit_pegawai = $cek->status;
				$password = $cek->password;	
				$nip = $cek->nip;
				$nama = $cek->nama;
				$id = $cek->id_akademik;
				
				$this->session->set_userdata(array(
					'Login' => true,
					'nama' => $nama,
					'id' => $id,
					'nip' => $nip,
					'unit_pegawai' => $unit_pegawai,
					'jabatan' => $unit_pegawai,
					'password'=> $password));						
				
				  redirect('Dashboard/home');
			}
			else
			{
				$this->session->set_flashdata('login','login tidak berhasil <br> username dan password salah');
				redirect('login');
			}

		 }		
		
		
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');

	}
	
}

?>