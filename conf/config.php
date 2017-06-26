<?php
class config{

	private $conn = "";
  private $host = "localhost";
  private $user = "root";
  private $password = "toor";
  private $database = "smart_home";

  function __construct() {
    $conn = $this->connectDB();
    if(!empty($conn)) {
      $this->conn = $conn;      
    }
  }

  function connectDB() {
    $conn = mysqli_connect($this->host,$this->user,$this->password,$this->database);
    return $conn;
  }
  
   /*function koneksi(){
    
    $this->koneksi = new mysqli($this->host,$this->user,$this->pass,$this->db);
    if ($this->koneksi->connect_errno) {
      printf("Koneksi Error : %s\n", $koneksi->connect_error);
      exit();
    }else{
      printf ("Koneksi Berhasil \n");
    }
  }*/

  function query($sql) {

    $hasil = $this->conn->query($sql);
    if(mysqli_errno($this->conn)){
        die('Eroor :'. mysqli_error($this->conn));
    }
    return $hasil;
  
  }

  function fetchArray($data) {
  
    return $data->fetch_array(MYSQLI_ASSOC);
  
  }




function runSelectQuery($query) {
    $result = mysqli_query($this->conn,$query);
    while($row=mysqli_fetch_assoc($result)) {
      $resultset[] = $row;
    }
    if(!empty($resultset))
      return $resultset;
  }
 
  function executeInsert($query) {
        $result = mysqli_query($this->conn,$query);
        $insert_id = mysqli_insert_id($this->conn);
    return $insert_id;
    
    }
 
  function executeQuery($sql) {
    $result = mysqli_query($this->conn,$sql);
    return $result;
    
    }



}
