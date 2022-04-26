<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!$this->session->userdata('Login'))
		{
			redirect('Login');
		}
		$this->data['judulhalaman'] = "Profil";
		
		
		$this->load->model('Pegawai_model');
		$this->load->model('Akademik_model');
		$this->id = $this->session->userdata('id');
		$this->password= $this->session->userdata('password');
	}

	public function index()
	{
		//$this->data1['extra'] = "Profil";
		if ($this->session->userdata('unit_pegawai') == "Dosen" || $this->session->userdata('unit_pegawai') == "Mahasiswa" ) {
			$pengguna=$this->Akademik_model->get_data($this->id);
			$this->data['pengguna'] =$pengguna;
			$this->load->view('temp/header');
			$this->load->view('temp/sidebar',$this->data);
			$this->load->view('Akademik/profil');
			$this->load->view('temp/footer');
		}
		else {
			$pengguna=$this->Pegawai_model->get_data($this->id);
			$this->data['pengguna'] =$pengguna;
			$this->load->view('temp/header');
			$this->load->view('temp/sidebar',$this->data);
			$this->load->view('Pegawai/profil');
			$this->load->view('temp/footer');
		}

	
	}


	public function ubah_password()
	{
		$password1  	= $this->input->post('password1');
		$password 		= $this->input->post('password');
		
		//var_dump($this->password);
		if(md5($password1) == $this->password)
		{
			$data['password']= md5($password);
			
	 	if ($this->session->userdata('unit_pegawai') == "Dosen" || $this->session->userdata('unit_pegawai') == "Mahasiswa" ) {
			$ubahpassword = $this->Akademik_model->edit($this->id,$data);
		}else{
			$ubahpassword = $this->Pegawai_model->edit($this->id,$data);
		}
			$this->session->set_flashdata('login','berhasil beruah');
			$this->session->sess_destroy();
			redirect('login');
		}

		else
		{
			$this->session->set_flashdata('gagal', 'password beda');
			redirect('profil');

		}
		

	}


	public function update()
	{
		$this->data_user['jenis_kelamin']=$this->input->post('jenis_kelamin');
		$tanggal=$this->input->post('tgl_lahir');
		$this->data_user['tgl_lahir'] = date("Y-m-d", strtotime($tanggal)) ;
		$this->data_user['alamat']=$this->input->post('alamat');
		$this->data_user['no_telp']=$this->input->post('no_hp');

	 if ($this->session->userdata('unit_pegawai') == "Dosen" || $this->session->userdata('unit_pegawai') == "Mahasiswa" ) {
		$this->data_user['nama']=$this->input->post('nama');
		$result = $this->Akademik_model->edit($this->id, $this->data_user);
		$this->session->set_userdata(array(
			'nama' => $this->data_user['nama']));	
	 }
	 else{

		$this->data_user['nama_pegawai']=$this->input->post('nama');
		$result = $this->Pegawai_model->edit($this->id, $this->data_user);
		$this->session->set_userdata(array(
			'nama' => $this->data_user['nama_pegawai']));	
	 }
		
		if($result != null)
		{
			$this->session->set_flashdata('berhasil', 'Data Berhasil Diubah');			
		}
		else
		{
			$this->session->set_flashdata('gagal', 'Data Gagal Diubah');				
		}
		 redirect('profil');
		
		
	}


}

?>
