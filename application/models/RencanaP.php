<?php
class RencanaP extends CI_Model
{
    private $table;

    public function __construct()
    {
        parent::__construct();
        $this->table = "rencanapembayaran";
    }

    // ADMIN
    function RencanaAdmin()
    {
        $query = "SELECT * FROM $this->table";
        return $this->db->query($query)->result();
    }

    function Insertrencana($data)
    {
        $this->db->insert($this->table, $data);
    }

    function tblBelum()
    {
        $query = "SELECT * $this->table where status=200";
        return $this->db->query($query)->result();
    }

    // SISWA
    function tblrencana($cekemail)
    {
        // $query = "SELECT * FROM rencanapembayaran rp INNER JOIN Siswa s ON s.NIS=rp.NIS where s.Email='$cekemail' ORDER BY rp.status ASC,rp.NoTagihan";
        $query = "SELECT *,ROW_NUMBER() OVER (PARTITION BY rp.NIS ORDER BY rp.status ASC, rp.NoTagihan) nourut FROM rencanapembayaran rp INNER JOIN Siswa s ON s.NIS=rp.NIS where s.Email='$cekemail' ORDER BY rp.status ASC,rp.NoTagihan";
        return $this->db->query($query)->result();
    }

    function getby_id($id, $idfield)
    {
        $query = "SELECT rp.NoTagihan, rp.Angsuran, rp.TanggalTagihan, rp.JumlahTagihan, s.NIS, s.NamaSiswa, s.Email, s.NoTelphone, s.Alamat FROM $this->table rp INNER JOIN Siswa s ON s.NIS=rp.NIS where $idfield='$id'";
        return $this->db->query($query);
    }

    function Insertpembayaran($table, $data)
    {
        $this->db->insert($table, $data);
    }

    function update_data($tabler, $datatabler, $idfield, $id)
    {
        $this->db->where($idfield, $id);
        $this->db->update($tabler, $datatabler);
    }
}



// Testing Query
// SELECT *,ROW_NUMBER() OVER (PARTITION BY rp.NIS ORDER BY rp.NoTagihan) FROM rencanapembayaran rp INNER JOIN Siswa s ON s.NIS=rp.NIS where s.Email='burhanti2308@gmail.com' ORDER BY `rp`.`NoTagihan` ASC
