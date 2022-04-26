<?php 

class Dashboard_model extends CI_Model
{
	
	 

	function __construct() {
        parent::__construct();
    }

    function getAllwarning() {
        return $this->db->where('stok_akhir <= (10)')->from("Bagian")->count_all_results();
    }

    function getAllpeminjaman()
    {
        $query = $this->db->query("SELECT Count(*) as peminjaman FROM `peminjaman_ruangan`");
        return $query->row()->peminjaman;               
    }

    function getAllkegiatan()
    {
        $query = $this->db->query("SELECT Count(*) as kegiatan FROM `kegiatan`");
        return $query->row()->kegiatan;               
    }

    function getAllstudi()
    {
        $query = $this->db->query("SELECT Count(*) as studi FROM `studi`");
        return $query->row()->studi;               
    }
	
    function getAllpembayaran()
    {
        $query = $this->db->query("SELECT Count(*) as pembayaran FROM `pembayaran` where status = 0");
        return $query->row()->pembayaran;               
    }

    function getAllpegawai()
    {
        $query = $this->db->query("SELECT Count(*) as pegawai FROM `pegawai` where jabatan != 'Manager'");
        return $query->row()->pegawai;               
    }
    function getAllBagian()
    {
        $query = $this->db->query("SELECT Count(*) as Bagian FROM `Bagian`");
        return $query->row()->Bagian;               
    }

}
 ?>