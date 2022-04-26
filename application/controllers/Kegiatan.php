<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kegiatan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('Login'))
		{
			redirect('Login');
		}
		
		 $this->load->model('Kegiatan_model');
		 $this->load->model('Prodi_model');
		 
	 


	}

	public function index()
	{	
		
			
		 $judulhalaman = "Kegiatan";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Kegiatan_model->get_all_kondisi($this->session->userdata('id'));

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Kegiatan/daftar');	
		$this->load->view('Temp/footer');	

	}

	public function approve()
	{	
		 $judulhalaman = "Kegiatan";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Kegiatan_model->get_all();

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Kegiatan/daftar_approve');	
		$this->load->view('Temp/footer');	

	}

	public function insert(){


		$this->data_user['id_akademik']=$this->session->userdata('id');
		$this->data_user['waktu_mulai']=$this->input->post('waktu_mulai');
		$this->data_user['waktu_selesai']=$this->input->post('waktu_selesai');
		$this->data_user['jenis_kegiatan']=$this->input->post('jenis_kegiatan');
		$this->data_user['isi_surat']=$this->input->post('isi_surat');
		$this->data_user['jumlah_hadir']=$this->input->post('jumlah_hadir');
		$this->data_user['penanggung_jawab']=$this->input->post('penanggung_jawab');
		$this->data_user['nama_kegiatan']=$this->input->post('nama_kegiatan');
		$tanggal_m=$this->input->post('tanggal_mulai');
		$this->data_user['tanggal_mulai'] = date("Y-m-d", strtotime($tanggal_m)) ;
		$tanggal_s=$this->input->post('tanggal_mulai');
		$this->data_user['tanggal_selesai'] = date("Y-m-d", strtotime($tanggal_s)) ;

		// range tanggal
		// $range = $this->input->post('periode');			
		// $tgl_awal = substr($range,0,10);
		// $this->data_user['tanggal_mulai'] = date("Y-m-d", strtotime($tgl_awal));
		// $tgl_akhir = substr($range,13,24);
		// $this->data_user['tanggal_selesai'] = date("Y-m-d", strtotime($tgl_akhir));
		// selesai range tanggal 

		$result=$this->Kegiatan_model->insert($this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Kegiatan Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('Kegiatan');
		
	}

	public function form()
	{
		$judulhalaman = "Kegiatan";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['prodi']=$this->Prodi_model->get_all();
	
		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Kegiatan/form');	
		$this->load->view('Temp/footer');	

	}

	public function delete($id_Kegiatan= null)
	{
		$judulhalaman = "Data Kegiatan";
			

		$this->data['judulhalaman'] = $judulhalaman;
		$this->Kegiatan_model->delete($id_Kegiatan);

		$this->session->set_flashdata('berhasil', 'Data Kegiatan Berhasil Dihapus');			

		redirect('Kegiatan');	

	}

	public function data_edit($id_Kegiatan=null){

		$judulhalaman = "Data Kegiatan";	
		$this->data['judulhalaman'] = $judulhalaman;
		
		$this->data['pengguna']=$this->Kegiatan_model->get_data($id_Kegiatan);
		$this->data['prodi']=$this->Prodi_model->get_all();

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Kegiatan/edit');	
		$this->load->view('Temp/footer');
	}
	public function view($id_Kegiatan=null){

		$judulhalaman = "Data Kegiatan";	
		$this->data['judulhalaman'] = $judulhalaman;
		
		$this->data['pengguna']=$this->Kegiatan_model->get_data($id_Kegiatan);
		// $this->data['prodi']=$this->Prodi_model->get_all();

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Kegiatan/view');	
		$this->load->view('Temp/footer');
	}

	public function edit($id_Kegiatan=null){
		$judulhalaman = "Kegiatan";
			

		$this->data['judulhalaman'] = $judulhalaman;

		$this->data_user['id_akademik']=$this->session->userdata('id');
		$this->data_user['waktu_mulai']=$this->input->post('waktu_mulai');
		$this->data_user['waktu_selesai']=$this->input->post('waktu_selesai');
		$this->data_user['jenis_kegiatan']=$this->input->post('jenis_kegiatan');
		$this->data_user['isi_surat']=$this->input->post('isi_surat');
		$this->data_user['jumlah_hadir']=$this->input->post('jumlah_hadir');
		$this->data_user['penanggung_jawab']=$this->input->post('penanggung_jawab');
		$this->data_user['nama_kegiatan']=$this->input->post('nama_kegiatan');
		$tanggal_m=$this->input->post('tanggal_mulai');
		$this->data_user['tanggal_mulai'] = date("Y-m-d", strtotime($tanggal_m)) ;
		$tanggal_s=$this->input->post('tanggal_mulai');
		$this->data_user['tanggal_selesai'] = date("Y-m-d", strtotime($tanggal_s)) ;

		$result=$this->Kegiatan_model->edit($id_Kegiatan,$this->data_user);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Kegiatan Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Kegiatan');
	}

	public function acc($status= null, $id_Kegiatan=null){
		$alasan = $this->input->post('alasan');
		// $this->data_user['status_Kegiatan']=$status;
		// echo var_dump($alasan);
		// die();

		$data = array(
			'status_kegiatan' => $status,
			'alasan' => $alasan
		);

		$result=$this->Kegiatan_model->edit($id_Kegiatan,$data);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Kegiatan Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Kegiatan/approve');
	}

	
	
}

?>