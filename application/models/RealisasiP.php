<?php
class RealisasiP extends CI_Model
{
    private $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = "realisasipembayaran";
    }

    // Admin

    function tblLunas()
    {
        $query = "SELECT * $this->table where status=200";
        return $this->db->query($query)->result();
    }


    // Siswa
    function tblrealisasi($cekemail)
    {
        $query = "SELECT *,ROW_NUMBER() OVER (PARTITION BY rp.NIS ORDER BY rp.NoTagihan) nourut FROM realisasipembayaran rp INNER JOIN Siswa s ON s.NIS=rp.NIS where s.Email='$cekemail' ORDER BY rp.status ASC,rp.NoTagihan ";
        return $this->db->query($query)->result();
    }
    function Insertpembayaran($data)
    {
        $this->db->insert($this->table, $data);
    }

    function update_data($table, $data, $orderid, $idfield)
    {
        $this->db->where($idfield, $orderid);
        $this->db->update($table, $data);
    }

    function updatedata($id)
    {
        $query = "UPDATE rencanapembayaran INNER JOIN realisasipembayaran ON rencanapembayaran.NIS = realisasipembayaran.NIS AND rencanapembayaran.Angsuran=realisasipembayaran.JenisPembayaran SET rencanapembayaran.status = 200 WHERE realisasipembayaran.NoBukti='$id'";
        return $this->db->query($query);
    }


    // UPDATE rencanapembayaran INNER JOIN realisasipembayaran ON rencanapembayaran.NIS = realisasipembayaran.NIS AND rencanapembayaran.Angsuran=realisasipembayaran.JenisPembayaran SET rencanapembayaran.status = 200 WHERE realisasipembayaran.NoBukti='822749074'

}
