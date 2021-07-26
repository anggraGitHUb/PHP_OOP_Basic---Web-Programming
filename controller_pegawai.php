<?php

// Class pegawai (CRUD pegawai)
class pegawai{

     // Property
     var $db;
     var $con;
     var $query;
     var $data;
     var $result;

    
    // Method untuk mengambil semua data dari table
    function GetData_All (){

        // Membuat Object dari Class database
        include 'database.php';
        $this->db = new database();
        $this->con=$this->db->Connect();

        // perintah Get data
        $this->query=mysqli_query($this->con,"select * from pbo_pegawai");
        while($this->data=mysqli_fetch_array($this->query)){
            $this->result[]=$this->data;
        }
        return $this->result;
    }

}


?>