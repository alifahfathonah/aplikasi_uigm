<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Studi extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('Login'))
		{
			redirect('Login');
		}
		
		 $this->load->model('Studi_model');
		 $this->load->model('Prodi_model');
		 
	


	}

	public function index()
	{	
		
			
		 $judulhalaman = "Studi Lanjut";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Studi_model->get_all_kondisi($this->session->userdata('id'));

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Studi/daftar');	
		$this->load->view('Temp/footer');	

	}

	public function approve()
	{	
		 $judulhalaman = "Studi";
		$this->data['judulhalaman'] = $judulhalaman;
		if($this->session->userdata('unit_pegawai') == 'Admin'){
			$id_status_progres_pengajuan = 3;
		 }else if($this->session->userdata('unit_pegawai') == 'Dekan'){
			$id_status_progres_pengajuan = 2;
		 }else if($this->session->userdata('unit_pegawai') == 'Kaprodi'){
			$id_status_progres_pengajuan = 1;
		 }
		$this->data['pengguna']=$this->Studi_model->get_all_by_status_progres($id_status_progres_pengajuan);

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Studi/daftar_approve');	
		$this->load->view('Temp/footer');	
	}

	public function insert(){


		$this->data_user['id_akademik']=$this->session->userdata('id');
		$this->data_user['pendidikan']=$this->input->post('pendidikan');
		$this->data_user['jabatan_fungsional']=$this->input->post('jabatan_fungsional');
		$this->data_user['golongan']=$this->input->post('golongan');
		$this->data_user['alamat_universitas']=$this->input->post('alamat_universitas');
		$this->data_user['instansi_dituju']=$this->input->post('instansi_dituju');
		$this->data_user['fakultas']=$this->input->post('fakultas');
		$this->data_user['progam_studi']=$this->input->post('progam_studi');
		$this->data_user['status_progres_pengajuan']=1;
		$this->data_user['jenjang']=$this->input->post('jenjang');
		$this->data_user['tahun_ajaran']=$this->input->post('tahun_ajaran');
		$this->data_user['biaya_persemester']=$this->input->post('biaya_persemester');
		$this->data_user['isi']=$this->input->post('isi');

		$result=$this->Studi_model->insert($this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Studi Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('Studi');
		
	}

	public function form()
	{
		$judulhalaman = "Studi Lanjut";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['prodi']=$this->Prodi_model->get_all();
	
		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Studi/form');	
		$this->load->view('Temp/footer');	

	}

	public function delete($id_studi= null)
	{
		$judulhalaman = "Data Studi";
			

		$this->data['judulhalaman'] = $judulhalaman;
		$this->Studi_model->delete($id_studi);

		$this->session->set_flashdata('berhasil', 'Data Studi Berhasil Dihapus');			

		redirect('Studi');	

	}

	public function data_edit($id_studi=null){

		$judulhalaman = "Data Studi";	
		$this->data['judulhalaman'] = $judulhalaman;
		
		$this->data['pengguna']=$this->Studi_model->get_data($id_studi);

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Studi/edit');	
		$this->load->view('Temp/footer');
	}
	public function view($id_studi=null){

		$judulhalaman = "Data Studi";	
		$this->data['judulhalaman'] = $judulhalaman;
		
		$this->data['pengguna']=$this->Studi_model->get_data($id_studi);
		// $this->data['prodi']=$this->Prodi_model->get_all();

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Studi/view');	
		$this->load->view('Temp/footer');
	}

	public function edit($id_studi=null){
		$judulhalaman = "Studi Lanjut";
			

		$this->data['judulhalaman'] = $judulhalaman;

		$this->data_user['id_akademik']=$this->session->userdata('id');
		$this->data_user['pendidikan']=$this->input->post('pendidikan');
		$this->data_user['jabatan_fungsional']=$this->input->post('jabatan_fungsional');
		$this->data_user['golongan']=$this->input->post('golongan');
		$this->data_user['alamat_universitas']=$this->input->post('alamat_universitas');
		$this->data_user['instansi_dituju']=$this->input->post('instansi_dituju');
		$this->data_user['fakultas']=$this->input->post('fakultas');
		$this->data_user['progam_studi']=$this->input->post('progam_studi');
		$this->data_user['jenjang']=$this->input->post('jenjang');
		$this->data_user['tahun_ajaran']=$this->input->post('tahun_ajaran');
		$this->data_user['biaya_persemester']=$this->input->post('biaya_persemester');
		$this->data_user['isi']=$this->input->post('isi');

		$result=$this->Studi_model->edit($id_studi,$this->data_user);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Studi Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Studi');
	}

	public function acc($status= null, $id_studi=null, $status_progres_pengajuan){
		
		$alasan = $this->input->post('alasan');

		$data = array(
			'status_studi' => $status,
			'status_progres_pengajuan' => $status_progres_pengajuan,
			'alasan' => $alasan
		);

		$result=$this->Studi_model->edit($id_studi,$data);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Studi Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Studi/approve');
	}

	
	
}

?>