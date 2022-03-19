<?php
class Login_model extends CI_Model
{

    private $table;
    public function __construct()
    {
        parent::__construct();

        // 		$this->table = "user";
        // 		$this->table = "regist";

    }
    function getcountlogin($user, $password)
    {
        $query = "SELECT * FROM user WHERE username='$user' AND password='$password'";
        return $this->db->query($query)->num_rows();
    }

    function getLogindata($user, $password)
    {
        $query = "SELECT * FROM user WHERE username='$user' AND password='$password'";
        return $this->db->query($query);
    }
    function InsertRegist($table, $data)
    {
        $query = "INSERT INTO $table Values $data";
        return $this->db->query($query);
    }
    function Insertpembayaran($table, $order_id, $NamaA, $TL, $KLS, $KL, $NamaOrtu, $Email, $NoP, $AS, $payment_type, $gross_amount, $status_code,  $transaction_time, $status)
    {
        $query = "INSERT INTO $table Values ('$order_id', '$NamaA', '$TL', '$KLS', '$KL', '$NamaOrtu', '$Email', '$NoP', '$AS', '$payment_type', '$gross_amount', '$status_code', '$transaction_time', '$status')";
        return $this->db->query($query);
    }
    function getall($table)
    {
        $query = "SELECT * FROM $table ORDER BY transaction_time DESC";
        return $this->db->query($query)->result();
    }

    function updatepembayaran($table, $data, $idfield, $order_id)
    {
        $this->db->where($idfield, $order_id);
        $this->db->update($table, $data);
    }
    function getby_id($table, $idfield, $id)
    {
        $query = "SELECT * FROM $table where $idfield='$id'";
        return $this->db->query($query);
    }
    function input_data($table, $data)
    {
        $query = "INSERT INTO $table Values $data";
        return $this->db->query($query);
    }
}
