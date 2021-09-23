<?php

class Anggota_m extends CI_Model{
    public function Ambil_anggota()
	{
		$this->db->select('anggota.*, anggota.level, level.status');
		
		$this->db->join('anggota','anggota.level = level.id_level');;
		$this->db->from('level');
		$query = $this->db->get();
		return $query->result_array();
	}
	
	public function do_tambah()
	{
		$data = [
			"nama" => $this->input->post("nama"),
			"username" => $this->input->post("username"),
			"pass" => $this->input->post("password"),
			"level" => $this->input->post("status"),
			"alamat" => $this->input->post("alamat"),
		];
		$this->db->insert("anggota",$data);
		$data = [
			"nama" => $this->input->post("nama"),
			"username" => $this->input->post("username"),
			"pass" => $this->input->post("password"),
			"level" => $this->input->post("status"),
			"alamat" => $this->input->post("alamat"),
		];
		$this->db->insert("anggota",$data);
	}

	public function show_anggota($id)
	{
		return $this->db->get_where('anggota',array("id_agt" => $id))->row_array();
	}

	public function do_edit()
	{
		$data = [
			"pass" => $this->input->post("psw"),
		];
		$this->db->where('id_agt',$this->input->post("id"));
		$this->db->update('anggota',$data);
	}
	
	function cek_old(){
		$old = $this->input->post('old');    
		$this->db->where('pass',$old);
		$query = $this->db->get('anggota');
		return $query;
	}
    
    public function edit_anggota()
	{
		$data = [
			"nama" => $this->input->post("nama"),
			"username" => $this->input->post("username"),
			"status" => $this->input->post("status"),
			"alamat" => $this->input->post("alamat"),

		];
		$this->db->where('id_agt',$this->input->post("id"));
		$this->db->update('anggota',$data);
	}

	public function hapus_anggota($id)
	{
		$this->db->where('id_agt',$id);
		return $this->db->delete('anggota');
	
    }
}   


?>