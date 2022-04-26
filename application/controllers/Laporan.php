<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		if(!$this->session->userdata('Login'))
		{
			redirect('Login');
		}
		 
		 $this->data['judulhalaman']= "Laporan";
		 $this->load->model('Detail_penjualan_model');
		 $this->load->model('Transaksi_penjualan_model');

	}

	public function index()
	{	
		$this->load->view('Temp/header');	
		$this->load->view('Temp/sidebar',$this->data);			
		$this->load->view('Laporan/laporan');	
		$this->load->view('Temp/footer');	

	} 

	public function cetak_laporan()
	{
			$judulhalaman = "Laporan";
			$this->data['judulhalaman'] = $judulhalaman;
		$range = $this->input->post('periode');			

		$tgl_awal = substr($range,0,10);
		$tgl_awal = date("Y-m-d", strtotime($tgl_awal));
 
		$tgl_akhir = substr($range,13,24);
		$tgl_akhir = date("Y-m-d", strtotime($tgl_akhir));		
		
		$karyawan = $this->Detail_penjualan_model->laporan($tgl_awal,$tgl_akhir);		
		$this->data['karyawan'] = $karyawan;		
		$this->data['tgl_awal'] = $tgl_awal;		
		$this->data['tgl_akhir'] = $tgl_akhir;

			$this->load->view('Temp/header');
			$this->load->view('Temp/sidebar',$this->data);
	 		$this->load->view('Laporan/cetak_laporan');
	 		$this->load->view('Temp/footer');
	 }

		
}

?>