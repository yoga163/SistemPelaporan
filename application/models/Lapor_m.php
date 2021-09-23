<?php

class Lapor_m extends CI_Model{
    public function Ambil_lapor($limit,$start)
	{
		$this->db->limit($limit, $start);
		$this->db->order_by("tgl","desc");
		$query = $this->db->get('lapor');
		return $query->result_array();
	}
	public function Ambil_lapor2()
	{
		
		$this->db->order_by("tgl","desc");
		$query = $this->db->get('lapor');
		return $query->result_array();
	}

	public function do_tambah()
	{
		$data = [
			"nama" => $this->input->post("nama"),
			"nohp" => $this->input->post("nohp"),
			"alamat" => $this->input->post("alamat"),
			"laporan" => $this->input->post("lapor"),
			"tgl" => $this->input->post('tanggal'),
			"foto" => $this->upload->data("file_name")
			
		];
		$this->db->insert("lapor",$data);
	}

	public function show_lapor($id)
	{
		return $this->db->get_where('lapor',array("id_lapor" => $id))->row_array();
	}

	public function jml_lapor(){
		return $this->db->count_all('lapor');
	}

	public function do_edit()
	{
		$data = [
			"nama" => $this->input->post("nama"),
			"nohp" => $this->input->post("nohp"),
			"alamat" => $this->input->post("alamat"),
			"laporan" => $this->input->post("laporan"),
			"foto" => $this->upload->data("file_name")
		];
		$this->db->where('id_lapor',$this->input->post("id"));
		$this->db->update('lapor',$data);
	}

	public function do_edit2()
	{
		$data = [
			"nama" => $this->input->post("nama"),
			"nohp" => $this->input->post("nohp"),
			"alamat" => $this->input->post("alamat"),
			"laporan" => $this->input->post("laporan"),
		];
		$this->db->where('id_lapor',$this->input->post("id"));
		$this->db->update('lapor',$data);
	}

	public function lihat_data($id)
	{
		return $this->db->get_where('lapor',array('id_lapor' => $id))->row_array();
	}

	public function hapus_lapor($id)
	{
		$query = $this->db->delete('lapor',"id_lapor = '$id'");
		return $query;
	
	}
	
	/*filter*/
	function getTahun()
	{
		$this->db->select('YEAR(tgl) AS tahun'); // Ambil Tahun dari field tgl
        $this->db->from('lapor'); // select ke tabel transaksi
        $this->db->order_by('YEAR(tgl)'); // Urutkan berdasarkan tahun secara Ascending (ASC)
		$this->db->group_by('YEAR(tgl)'); 
		$query = $this->db->get();
		return $query->result_array();
	}

	function tanggal($tanggal)
	{
		$this->db->from('lapor');
		$this->db->where('DATE(tgl)', $tanggal);
		
		$query = $this->db->get();
		return $query->result_array();
	}

	function bulan($bulan,$tahun1)
	{
		$this->db->from('lapor');
		$this->db->where('MONTH(tgl)', $bulan); // Tambahkan where bulan
		$this->db->where('YEAR(tgl)', $tahun1);
		
		$query = $this->db->get();
		return $query->result_array();
	}

	function tahun($tahun1)
	{
		$this->db->from('lapor');
		$this->db->where('YEAR(tgl)', $tahun1);
		
		$query = $this->db->get();
		return $query->result_array();
	}

}   


?>