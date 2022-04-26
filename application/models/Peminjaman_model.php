<?php 
class Peminjaman_model extends CI_Model
{	
	 private $primary_key = 'id_peminjaman_ruangan';
     private $table_name  = 'peminjaman_ruangan';

	function __construct()
    {
        parent::__construct();
    }

    function get_data($id)
    {
        $this->db->join('akademik','akademik.id_akademik=peminjaman_ruangan.id_akademik');
        $this->db->join('prodi','prodi.id_prodi=akademik.id_prodi');
        $this->db->where($this->primary_key, $id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }

    function get_all_where()
    {
        $this->db->where('jabatan', 'Penilai');
        $this->db->or_where_in('jabatan', 'Kepala Penilai');
        $this->db->order_by($this->primary_key);
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
    function get_all_kondisi($id)
    {
        $this->db->where('id_akademik', $id);
        $this->db->order_by($this->primary_key);
        $query = $this->db->get($this->table_name);
        return $query->result();
    }

    function get_all()
    {
        $this->db->join('akademik','akademik.id_akademik=peminjaman_ruangan.id_akademik');
        $this->db->join('prodi','prodi.id_prodi=akademik.id_prodi');
        $this->db->order_by($this->primary_key);
        $query = $this->db->get($this->table_name);
        return $query->result();
    }
  

    function count_all()
    {
        return $this->db->count_all($this->table_name);
    }

    function insert($data)
    {
        return $this->db->insert($this->table_name, $data);
    }

    function edit($id, $data)
    {
        $this->db->where($this->primary_key, $id);
        return $this->db->update($this->table_name, $data);
    }

    function delete($id)
    {
        return $this->db->delete($this->table_name, array($this->primary_key => $id));
    }
    
    function get_data_tanggal($id)
    {
        $this->db->select('tgl_lahir');
        $this->db->where($this->primary_key, $id);
        $query = $this->db->get($this->table_name);
        return $query->row();
    }  
}
?>