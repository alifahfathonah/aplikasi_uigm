<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman_ruangan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('Login'))
		{
			redirect('Login');
		}
		
		 $this->load->model('Peminjaman_model');
		 $this->load->model('Prodi_model');
		 
	


	}

	public function index()
	{	
			
		 $judulhalaman = "Peminjaman Ruangan";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Peminjaman_model->get_all_kondisi($this->session->userdata('id'));

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Peminjaman_ruangan/daftar');	
		$this->load->view('Temp/footer');	

	}

	public function perlengkapan()
	{	
			
		 $judulhalaman = "Perlengkapan";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['perlengkapan']=$this->Peminjaman_model->get_all_perlengkapan();

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Peminjaman_ruangan/perlengkapan');	
		$this->load->view('Temp/footer');	

	}

	public function ruangan_dipakai()
	{	
			
		 $judulhalaman = "Ruangan_Dipakai";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Peminjaman_model->Peminjaman_model->get_all_by_status_progres_acc_dekan(2);

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Peminjaman_ruangan/daftar_ruangan_dipakai');	
		$this->load->view('Temp/footer');	

	}

	public function approve()
	{	
		 $judulhalaman = "Peminjaman";
		 if($this->session->userdata('unit_pegawai') == 'Admin'){
			$id_status_progres_pengajuan = 3;
		 }else if($this->session->userdata('unit_pegawai') == 'Dekan'){
			$id_status_progres_pengajuan = 2;
		 }else if($this->session->userdata('unit_pegawai') == 'Kaprodi'){
			$id_status_progres_pengajuan = 1;
		 }
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['pengguna']=$this->Peminjaman_model->get_all_by_status_progres($id_status_progres_pengajuan);

		$this->load->view('Temp/header');
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Peminjaman_ruangan/daftar_approve');	
		$this->load->view('Temp/footer');	

	}

	public function insert(){


		$this->data_user['id_akademik']=$this->session->userdata('id');
		$this->data_user['jenis_ruangan']=$this->input->post('jenis_ruangan');
		$this->data_user['jenis_perlengkapan']=$this->input->post('jenis_perlengkapan');
		$this->data_user['jumlah_perlengkapan']=$this->input->post('jumlah_perlengkapan');
		$this->data_user['waktu_mulai']=$this->input->post('waktu_mulai');
		$this->data_user['waktu_selesai']=$this->input->post('waktu_selesai');
		$this->data_user['jenis_kegiatan']=$this->input->post('jenis_kegiatan');
		$this->data_user['jumlah_hadir']=$this->input->post('jumlah_hadir');
		$this->data_user['penanggung_jawab']=$this->input->post('penanggung_jawab');
		$this->data_user['status_progres_pengajuan']=1;
		$this->data_user['isi_surat']=$this->input->post('isi_surat');
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

		$result=$this->Peminjaman_model->insert($this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Peminjaman Ruangan Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('Peminjaman_ruangan');
		
	}


	public function insert_perlengkapan(){


		
		
		$this->data_user['jenis_perlengkapan']=$this->input->post('jenis_perlengkapan');
		$this->data_user['jumlah_perlengkapan']=$this->input->post('jumlah_perlengkapan');
		

		// range tanggal
		// $range = $this->input->post('periode');			
		// $tgl_awal = substr($range,0,10);
		// $this->data_user['tanggal_mulai'] = date("Y-m-d", strtotime($tgl_awal));
		// $tgl_akhir = substr($range,13,24);
		// $this->data_user['tanggal_selesai'] = date("Y-m-d", strtotime($tgl_akhir));
		// selesai range tanggal 

		$result=$this->Peminjaman_model->insert_perlengkapan($this->data_user);

			 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Perlengkapan Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}

		redirect('Peminjaman_ruangan/perlengkapan');
		
	}

	public function form()
	{
		$judulhalaman = "Peminjaman Ruangan";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['prodi']=$this->Prodi_model->get_all();
	
		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Peminjaman_ruangan/form');	
		$this->load->view('Temp/footer');	

	}

	public function form_perlengkapan()
	{
		$judulhalaman = "Perlengkapan";
		$this->data['judulhalaman'] = $judulhalaman;
		$this->data['prodi']=$this->Prodi_model->get_all();
	
		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Peminjaman_ruangan/form_perlengkapan');	
		$this->load->view('Temp/footer');	

	}

	public function delete($id_peminjaman_ruangan= null)
	{
		$judulhalaman = "Data Peminjaman Ruangan";
			

		$this->data['judulhalaman'] = $judulhalaman;
		$this->Peminjaman_model->delete($id_peminjaman_ruangan);

		$this->session->set_flashdata('berhasil', 'Data Peminjaman Ruangan Berhasil Dihapus');			

		redirect('Peminjaman_ruangan');	

	}

	public function delete_perlengkapan($id_jenis_perlengkapan= null)
	{
		$judulhalaman = "Perlengkapan";
			

		$this->data['judulhalaman'] = $judulhalaman;
		$this->Peminjaman_model->delete($id_jenis_perlengkapan);

		$this->session->set_flashdata('berhasil', 'Data Perlengkapan Berhasil Dihapus');			

		redirect('Peminjaman_ruangan');	

	}

	public function data_edit($id_peminjaman_ruangan=null){

		$judulhalaman = "Data Peminjaman Ruangan";	
		$this->data['judulhalaman'] = $judulhalaman;
		
		$this->data['pengguna']=$this->Peminjaman_model->get_data($id_peminjaman_ruangan);
		$this->data['prodi']=$this->Prodi_model->get_all();

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Peminjaman_ruangan/edit');	
		$this->load->view('Temp/footer');
	}

	public function data_edit_perlengkapan($id_jenis_perlengkapan=null){

		$judulhalaman = "Perlengkapan";	
		$this->data['judulhalaman'] = $judulhalaman;
		
		
		$this->data['perlengkapan']=$this->Peminjaman_model->get_data_perlengkapan_by_id($id_jenis_perlengkapan);

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Peminjaman_ruangan/edit_perlengkapan');	
		$this->load->view('Temp/footer');
	}

	public function view($id_peminjaman_ruangan=null){

		$judulhalaman = "Data Peminjaman Ruangan";	
		$this->data['judulhalaman'] = $judulhalaman;
		
		$this->data['pengguna']=$this->Peminjaman_model->get_data($id_peminjaman_ruangan);
		// $this->data['prodi']=$this->Prodi_model->get_all();

		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Peminjaman_ruangan/view');	
		$this->load->view('Temp/footer');
	}

	public function edit($id_peminjaman_ruangan=null){
		$judulhalaman = "Peminjaman Ruangan";
			

		$this->data['judulhalaman'] = $judulhalaman;

		$this->data_user['id_akademik']=$this->session->userdata('id');
		$this->data_user['jenis_ruangan']=$this->input->post('jenis_ruangan');
		$this->data_user['jenis_perlengkapan']=$this->input->post('jenis_perlengkapan');
		$this->data_user['waktu_mulai']=$this->input->post('waktu_mulai');
		$this->data_user['waktu_selesai']=$this->input->post('waktu_selesai');
		$this->data_user['jenis_kegiatan']=$this->input->post('jenis_kegiatan');
		$this->data_user['isi_surat']=$this->input->post('isi_surat');
		$this->data_user['jumlah_hadir']=$this->input->post('jumlah_hadir');
		$this->data_user['penanggung_jawab']=$this->input->post('penanggung_jawab');
		$tanggal_m=$this->input->post('tanggal_mulai');
		$this->data_user['tanggal_mulai'] = date("Y-m-d", strtotime($tanggal_m)) ;
		$tanggal_s=$this->input->post('tanggal_mulai');
		$this->data_user['tanggal_selesai'] = date("Y-m-d", strtotime($tanggal_s)) ;

		$result=$this->Peminjaman_model->edit($id_peminjaman_ruangan,$this->data_user);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Peminjaman Ruangan Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Peminjaman_ruangan');
	}

	public function edit_perlengkapan($id_jenis_perlengkapan=null){
		$judulhalaman = "Perlengkapan";
			
		$this->data['judulhalaman'] = $judulhalaman;

		$this->data_user['jenis_perlengkapan']=$this->input->post('jenis_perlengkapan');
		$this->data_user['jumlah_perlengkapan']=$this->input->post('jumlah_perlengkapan');

		

		$result=$this->Peminjaman_model->edit_perlengkapan($id_jenis_perlengkapan,$this->data_user);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Perlengkapan Berhasil Diubah');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Peminjaman_ruangan/perlengkapan');
	}

	public function acc($status= null, $id_peminjaman_ruangan=null, $status_progres_pengajuan=null){
		
		$alasan = $this->input->post('alasan');

		$data = array(
			'status_peminjaman' => $status,
			'status_progres_pengajuan' => $status_progres_pengajuan,
			'alasan' => $alasan
		);

		$result=$this->Peminjaman_model->edit($id_peminjaman_ruangan,$data);

		 if($result != null)
			{
				$this->session->set_flashdata('berhasil', 'Data Peminjaman Ruangan Berhasil Diinput');			
			}
			else
			{
				$this->session->set_flashdata('gagal', 'Data Gagal Diinput ');				
			}
		redirect('Peminjaman_ruangan/approve');
	}

	
	
}

?>