<?php 
class Input_barang_model extends CI_Model
{	
	 private $primary_key = 'id_input';
     private $table_name  = 'input_barang';

	function __construct()
    {
        parent::__construct();
    }

    function get_data_last() {
        $query = $this->db->query("SELECT $this->primary_key from $this->table_name order by $this->primary_key DESC LIMIT 1 ");
        return $query->row()->id_input;
    }
    
    function get_data($id)
    {        
        $this->db->join('barang','barang.id_barang=input_barang.id_barang');
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

    function get_all()
    {
        $this->db->join('barang','barang.id_barang=input_barang.id_barang');
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