<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prodi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('Login'))
		{
			redirect('Login');
		}
		
		 $this->load->library('fungsi');
		 $this->load->model('Prodi_model');
		


	}


	public function index()
	{
			$judulhalaman = "Prodi";
			
			$this->data['Prodi']=$this->Prodi_model->get_all();
			$this->data['judulhalaman'] = $judulhalaman;
			
			$this->load->view('Temp/header');
			$this->load->view('Temp/sidebar',$this->data);
			$this->load->view('Prodi/daftar');
			$this->load->view('Temp/footer',$judulhalaman);
	}	
	public function form()
	{
			$judulhalaman = "Prodi";
			
			$this->data['judulhalaman'] = $judulhalaman;
			
			$this->load->view('Temp/header');
			$this->load->view('Temp/sidebar',$this->data);
			$this->load->view('Prodi/form');
			$this->load->view('Temp/footer',$judulhalaman);
	}	


		
	public function insert()
	{
		/*Dari Form Input*/
		$data['prodi']=$this->input->post('prodi');
		$data['keterangan']=$this->input->post('keterangan');

		$result = $this->Prodi_model->insert($data);

		if ($result) $this->session->set_flashdata('berhasil', 'Data berhasil ditambah.');
		else $this->session->set_flashdata('gagal', 'Data gagal ditambah.');

		redirect('Prodi');
	}

	public function delete($id_prodi= null)
	{
			
		$this->Prodi_model->delete($id_prodi);

		$this->session->set_flashdata('berhasil', 'Data Prodi Berhasil Dihapus');			

		redirect('Prodi');	

	}

	public function data_edit($id_prodi=null){
			

		$judulhalaman = "Prodi";
		$this->data['judulhalaman'] = $judulhalaman;
		
		$this->data['Prodi']=$this->Prodi_model->get_data($id_prodi);
		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Prodi/edit');	
		$this->load->view('Temp/footer');

	}

	public function edit($id = NULL)
	{
		/*Dari Form Input*/
		$data['prodi']=$this->input->post('prodi');
		$data['keterangan']=$this->input->post('keterangan');

		$result = $this->Prodi_model->edit($id, $data);

		if ($result) $this->session->set_flashdata('berhasil', 'Ubah data berhasil.');
		else $this->session->set_flashdata('gagal', 'Ubah data gagal.');

		redirect('Prodi');
	}

	
}

?>