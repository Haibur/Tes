<?php
class Master4 extends CI_Model
{
	private $table;

	public function __construct()
	{
		parent::__construct();
		$this->table = "Siswa";
	}

	function getAll()
	{
		$query = "SELECT * FROM $this->table";
		return $this->db->query($query)->result();
	}

	function tblrencana($tabler)
	{
		$query = "SELECT * FROM $tabler rp INNER JOIN $this->table s ON rp.NIS=s.NIS";
		return $this->db->query($query)->result();
	}

	function A()
	{
		$query = "SELECT COUNT(ta.NIS) Jumlah FROM transaksi Ka LEFT JOIN Siswa ta ON ta.NIS=Ka.order_id where Ka.Kelas='TKA' and Ka.gross_amount=300000";
		return $this->db->query($query)->result();
	}
	function PromoA()
	{
		$query = "SELECT COUNT(tpa.NIS) Jumlah FROM transaksi Kpa LEFT JOIN Siswa tpa ON tpa.NIS=Kpa.order_id where Kpa.Kelas='TKA' and Kpa.gross_amount=270000";
		return $this->db->query($query)->result();
	}
	function B()
	{
		$query = "SELECT COUNT(tb.NIS) Jumlah FROM transaksi Kb LEFT JOIN Siswa tb ON tb.NIS=Kb.order_id where Kb.Kelas='TKB' and Kb.gross_amount=300000";
		return $this->db->query($query)->result();
	}
	function PromoB()
	{
		$query = "SELECT COUNT(tpb.NIS) Jumlah FROM transaksi Kpb LEFT JOIN Siswa tpb ON tpb.NIS=Kpb.order_id where Kpb.Kelas='TKB' and Kpb.gross_amount=270000";
		return $this->db->query($query)->result();
	}

	function Insertrencana($tabler, $data)
	{
		$this->db->insert($tabler, $data);
	}

	function cari_id($tabler, $idfield, $NIS)
	{
		$query = "SELECT * FROM $tabler where $idfield='$NIS'";
		return $this->db->query($query);
	}

	function cari($tabler, $data)
	{
		$query = "SELECT * FROM $tabler where $data";
		return $this->db->query($query);
	}

	function getby_id($idfield, $id)
	{
		$query = "SELECT ta.NIS, ta.NamaSiswa, ta.JenisKelamin, ta.NamaOrtu, ta.NoTelphone FROM transaksi Ka LEFT JOIN Siswa ta ON ta.NIS=Ka.order_id where Ka.Kelas='$idfield' and Ka.gross_amount='$id'";
		return $this->db->query($query);
	}

	function BiayaA()
	{
		$query = "SELECT ta.NIS, ta.NamaSiswa, ta.JenisKelamin, ta.NamaOrtu, ta.NoTelphone FROM transaksi Ka INNER JOIN Siswa ta ON ta.NIS=Ka.order_id where Ka.Kelas='TKA' and Ka.gross_amount='300000'";
		return $this->db->query($query);
	}

	function BiayaPA($idfield, $id)
	{
		$query = "SELECT ta.NIS, ta.NamaSiswa, ta.JenisKelamin, ta.NamaOrtu, ta.NoTelphone FROM transaksi Ka LEFT JOIN Siswa ta ON ta.NIS=Ka.order_id where Ka.Kelas='$idfield' and Ka.gross_amount='$id'";
		return $this->db->query($query);
	}
	function BiayaB($id, $pangkal)
	{
		$query = "SELECT * FROM $this->table where Kelas='$id' AND gross_amount='$pangkal";
		return $this->db->query($query);
	}
	function BiayaPB($id, $pangkal)
	{
		$query = "SELECT * FROM $this->table where Kelas='$id' AND gross_amount='$pangkal";
		return $this->db->query($query);
	}
}
