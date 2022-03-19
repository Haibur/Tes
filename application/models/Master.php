<?php
class Master extends CI_Model
{
	private $table;

	public function __construct()
	{
		parent::__construct();
	}
	// Admin
	function getall($table)
	{
		$query = "SELECT * FROM $table ORDER BY transaction_time DESC";
		return $this->db->query($query)->result();
	}

	function tblLunas()
	{
		$query = "SELECT * FROM realisasipembayaran rp INNER JOIN Siswa s ON s.NIS=rp.NIS where status=200";
		return $this->db->query($query)->result();
	}

	function tblBelum()
	{
		$query = "SELECT * FROM rencanapembayaran rp INNER JOIN Siswa s ON s.NIS=rp.NIS where status<200";
		return $this->db->query($query)->result();
	}

	// 


	function A()
	{
		$query = "SELECT COUNT(ta.order_id) Jumlah FROM Kelas Ka LEFT JOIN transaksi ta ON ta.Kelas=Ka.Kelas where ta.Kelas='TKA' and ta.gross_amount=300000";
		return $this->db->query($query)->result();
	}
	function PromoA()
	{
		$query = "SELECT COUNT(tpa.order_id) Jumlah FROM Kelas Kpa LEFT JOIN transaksi tpa ON tpa.Kelas=Kpa.Kelas where tpa.Kelas='TKA' and tpa.gross_amount=270000";
		return $this->db->query($query)->result();
	}
	function B()
	{
		$query = "SELECT COUNT(tb.order_id) Jumlah FROM Kelas Kb LEFT JOIN transaksi tb ON tb.Kelas=Kb.Kelas where tb.Kelas='TKB' and tb.gross_amount=300000";
		return $this->db->query($query)->result();
	}
	function PromoB()
	{
		$query = "SELECT COUNT(tpb.order_id) Jumlah FROM Kelas Kpb LEFT JOIN transaksi tpb ON tpb.Kelas=Kpb.Kelas where tpb.Kelas='TKB' and tpb.gross_amount=270000";
		return $this->db->query($query)->result();
	}

	// function getAll($table)
	// {
	// 	$query = "SELECT * FROM $table";
	// 	return $this->db->query($query)->result();
	// }

	function input_datalogin($user, $datalogin)
	{
		$this->db->insert($user, $datalogin);
	}

	function input_datasiswa($siswa, $datasiswa)
	{
		$this->db->insert($siswa, $datasiswa);
	}

	function getby_id($table, $idfield, $id)
	{
		$query = "SELECT * FROM $table where $idfield='$id'";
		return $this->db->query($query);
	}

	// function delete($table, $id, $idfield)
	// {
	// 	$this->db->delete($table, array($idfield => $id));
	// }

	function update_data($table, $data, $orderid, $idfield)
	{
		$this->db->where($idfield, $orderid);
		$this->db->update($table, $data);
	}

	// public function data_array($table)
	// {
	// 	return $this->db->get($table)->result_array();
	// }
}
