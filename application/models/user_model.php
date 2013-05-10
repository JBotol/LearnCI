<?php
class User_model extends CI_Model {
  function get() {
    $q = $this->db->get('mahasiswa');
    If ($q->num_rows() > 0) {
      return $q->result(); // ambil seluruh hasil query
    }
  }

  function simpan($f)
  {
    $this->db->insert('mahasiswa',$f);
  }
  
  public function getRec($kode) {
	$this->db->where(array('nrp'=>$kode));
	$q = $this->db->get('mahasiswa');
	if ($q->num_rows() > 0) {
	return $q->row(); //ambil 1 record saja
	}	
  }

  public function koreksi($f){
    // print_r($f); // -------------------> menampilkan isi arraynya
	$this->db->where('nrp',$f['nrp']);
	$this->db->update('mahasiswa',$f);
  }  

  public function hapus($f){
    // print_r($f); // -------------------> menampilkan isi arraynya
	$this->db->where('nrp',$f['nrp']);
	$this->db->delete('mahasiswa',$f);
  }  
  
  public function sort_id(){
	$sql="SELECT * FROM mahasiswa ORDER BY nrp";
	$q = $this->db->query($sql);
    If ($q->num_rows() > 0) {
      return $q->result(); // ambil seluruh hasil query
    }
  }
  public function sort_nama(){
    $sql="SELECT * FROM mahasiswa ORDER BY nama";
	$q = $this->db->query($sql);
    If ($q->num_rows() > 0) {
      return $q->result(); // ambil seluruh hasil query
    }
  }
}