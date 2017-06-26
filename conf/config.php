<?php


class config{

	private $host = 'localhost';
	private $user = 'root';
	private $pass = 'toor';
	private $db   = 'smart_home';

  /*function koneksi(){

  	$konek = mysql_connect($this->host,$this->user,$this->pass);
      
      if (!$konek){
      	die('MySQL ERROR: ' . mysql_error());
      }
      
      mysql_select_db($this->db);

     return $konek;
  }*/

  function koneksi(){
    
    $this->koneksi = new mysqli($this->host,$this->user,$this->pass,$this->db);
    if ($this->koneksi->connect_errno) {
      printf("Koneksi Error : %s\n", $koneksi->connect_error);
      exit();
    }else{
      printf ("Koneksi Berhasil \n");
    }
  }

  function query($sql) {

    $hasil = $this->koneksi->query($sql);
    if(mysqli_errno($this->koneksi)){
        die('Eroor :'. mysqli_error($this->koneksi));
    }
    return $hasil;
  
  }

  function fetchArray($data) {
  
    return $data->fetch_array(MYSQLI_ASSOC);
  
  }

  function relay1(){
   
     $relay1 = $_POST['relay1'];

     if($relay1=='true'){
	  $message = 'Hey my button is enabled';
      $success = 'On';
	  echo json_encode(array('message'=>$message,'success'=>$success));
     } else  if($relay1=='false'){
	  $message = 'Hey my button is disabled.';
	  $success = 'Off';
   	  echo json_encode(array('message'=>$message,'success'=>$success));
     }

   }

}


?>