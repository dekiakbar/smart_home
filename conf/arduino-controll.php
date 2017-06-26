<?php
include("PhpSerial.php");
include("config.php");
function __autoload($config){
	require_once $config . '.php';
}

$serial = new PhpSerial();
$serial->deviceSet("/dev/ttyACM0");
$serial->deviceOpen();	

$konfig = new config();

if($_POST['name'] == 'relay1'){
  	
  	if($_POST['relay'] == 'true') {
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "0","1");
		if (strlen($data) < 8) {
			$data=str_pad($data,8, "0", STR_PAD_RIGHT);
		}
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'Switch 1 diaktivkan';
	    $sucr = 'Relay 1 On';
	} else if($_POST['relay'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "0","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 1 dimatikan';
	    $sucr = 'Relay 1 Off';
	}
  
  
} else if($_POST['name'] == 'relay2'){
  	
  	if($_POST['relay'] == 'true') {
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "1","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		$msg  = 'switch 2 di aktivkan';
	    $sucr = 'Relay 2 On';
	} else if($_POST['relay'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "1","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
        $msg  = 'switch 2 di matikan';
	    $sucr = 'Relay 2 Off';
	}
  

} else if($_POST['name'] == 'relay3'){
  	
  	if($_POST['relay'] == 'true') {
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "2","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 3 di aktivkan';
	    $sucr = 'Relay 3 On';
	} else if($_POST['relay'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "2","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 3 di matikam';
	    $sucr = 'Relay 3 Off';
	}
  
  
} else if($_POST['name'] == 'relay4'){
  	
  	if($_POST['relay'] == 'true') {
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "3","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 4 di aktivkan';
	    $sucr = 'Relay 4 On';
	} else if($_POST['relay'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "3","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 4 di matikan';
	    $sucr = 'Relay 4 Off';
	}

} else if($_POST['name'] == 'relay5'){
  	
  	if($_POST['relay'] == 'true') {
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "4","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 5 di aktivkan';
	    $sucr = 'Relay 5 On';
	} else if($_POST['relay'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "4","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 5 di matikan';
	    $sucr = 'Relay 5 Off';
	}

} else if($_POST['name'] == 'relay6'){
  	
  	if($_POST['relay'] == 'true') {
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "5","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 6 di aktivkan';
	    $sucr = 'Relay 6 On';
	} else if($_POST['relay'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "5","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 6 di matikan';
	    $sucr = 'Relay 6 Off';
	}

} else if($_POST['name'] == 'relay7'){
  	
  	if($_POST['relay'] == 'true') {
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "6","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
 		$msg  = 'switch 7 di aktivkan';
	    $sucr = 'Relay 7 On';
	} else if($_POST['relay'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "6","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 7 di matikan';
	    $sucr = 'Relay 7 Off';
	}

} else if($_POST['name'] == 'relay8'){
  	
  	if($_POST['relay'] == 'true') {
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "7","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 8 di aktivkan';
	    $sucr = 'Relay 8 On';
	} else if($_REQUEST['relay'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "7","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		$msg  = 'switch 8 di matikan';
	    $sucr = 'Relay 8 Off';
	}

}
  
 echo json_encode(array('msg' => $msg,'sucr' => $sucr));

$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
$ambil = $konfig->fetchArray($sql);
$kondisi = $ambil["kondisi"];
$serial->sendMessage($kondisi);
$serial->deviceClose();

$serial->confBaudRate(38400);


?>