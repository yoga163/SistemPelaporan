<?php
class Login_m extends CI_Model
{
	public function Cek_login ($user,$pasw)
	{
		$query=$this->db->get_where('anggota',array('username' => $user, 'pass' => $pasw),$limit=1);
		
        return $query;
	}
	
	public function coba()
	{
		$this->db->from('lapor');
		$this->db->where('DATE(tgl)', "2020-12-11");
		$query = $this->db->get();
		return $query;
	}
}
?>