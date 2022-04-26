<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akademik extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('Login'))
		{
			redirect('Login');
		}
		
		 $this->load->model('Akademik_model');
		 $this->load->model('Prodi_model');
		 
	


	}

	public function index()
	{	
		
			
		 $judulhalaman = "Akademik";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Akademik_model->get_all();

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Akademik/daftar');	
		$this->load->view('Temp/footer');	

	}

	public function insert(){


		$this->data_user['nip']=$this->input->post('nip');
		$this->data_user['nama']=$this->input->post('nama');
		$this->data_user['id_prodi']=$this->input->post('id_prodi');
		$this->data_user['status']=$this->input->post('status');
		$this->data_user['jenis_kelamin']=$this->input->post('jenis_kelamin');
		$tanggal=$this->input->post('tgl_lahir');
		$this->data_user['tgl_lahir'] = date("Y-m-d", strtotime($tanggal)) ;
		$this->data_user['alamat']=$this->input->post('alamat');
		$this->data_user['no_telp']=$this->input->post('no_hp');
		$this->data_user['password']=md5($this->input->post('nip'));

		$result=$this->Akademik_model->insert($this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Akademik Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('Akademik');
		
	}

	public function form()
	{
		$judulhalaman = "Akademik";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['prodi']=$this->Prodi_model->get_all();
	
		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Akademik/form');	
		$this->load->view('Temp/footer');	

	}

	public function delete($id_akademik= null)
	{
		$judulhalaman = "Data Akademik";
			

		$this->data['judulhalaman'] = $judulhalaman;
		$this->Akademik_model->delete($id_akademik);

		$this->session->set_flashdata('berhasil', 'Data Akademik Berhasil Dihapus');			

		redirect('Akademik');	

	}

	public function data_edit($id_akademik=null){

		$judulhalaman = "Data Akademik";	
		$this->data['judulhalaman'] = $judulhalaman;
		
		$this->data['pengguna']=$this->Akademik_model->get_data($id_akademik);
		$this->data['prodi']=$this->Prodi_model->get_all();

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Akademik/edit');	
		$this->load->view('Temp/footer');
	}

	public function edit($id_akademik=null){
		$judulhalaman = "Akademik";
			

		$this->data['judulhalaman'] = $judulhalaman;

		$this->data_user['nip']=$this->input->post('nip');
		$this->data_user['nama']=$this->input->post('nama');
		$this->data_user['id_prodi']=$this->input->post('id_prodi');
		$this->data_user['status']=$this->input->post('status');
		$this->data_user['jenis_kelamin']=$this->input->post('jenis_kelamin');
		$tanggal=$this->input->post('tgl_lahir');
		$this->data_user['tgl_lahir'] = date("Y-m-d", strtotime($tanggal)) ;
		$this->data_user['alamat']=$this->input->post('alamat');
		$this->data_user['no_telp']=$this->input->post('no_hp');
		if($this->input->post('password')!= null)
		{
			$this->data_user['password']=md5($this->input->post('password'));
		}
		$result=$this->Akademik_model->edit($id_akademik,$this->data_user);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Akademik Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Akademik');
	}

	
	
}

?>