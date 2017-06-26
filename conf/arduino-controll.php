<?php
include("config.php");
include("PhpSerial.php");
function __autoload($config){
	require_once $config . '.php';
}

$serial = new PhpSerial();
$serial->deviceSet("/dev/ttyACM0");
$serial->deviceOpen();	

$konfig = new config();
$konek = $konfig->koneksi();

/*	$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		echo $data."\n";
		$data = substr_replace($data, "0", "0","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
		echo $data;
*/
	if($_REQUEST['relay1'] == 'true'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "0","1");
		if (strlen($data) < 8) {
			$data=str_pad($data,8, "0", STR_PAD_RIGHT);
		}
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay2'] == 'true'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "1","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay3'] == 'true'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "2","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay4'] == 'true'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "3","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay5'] == 'true'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "4","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay6'] == 'true'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "5","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay7'] == 'true'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "6","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay8'] == 'true'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "1", "7","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay1'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "0","1");
		if (strlen($data) < 8) {
			$data=str_pad($data,8, "0", STR_PAD_LEFT);
		}
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay2'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "1","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay3'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "2","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay4'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "3","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay5'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "4","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay6'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "5","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay7'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "6","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	} else if($_REQUEST['relay8'] == 'false'){
		$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
		$ambil = $konfig->fetchArray($sql);
		$data = $ambil["kondisi"];
		$data = substr_replace($data, "0", "7","1");
		$konfig->query("UPDATE relay SET kondisi=".$data);
		sleep(1);
	}

/*if($_REQUEST['relay1'] == 'true'){

	$serial->sendMessage("1");
    $read = $serial->readPort();
    echo $read;
    $message="hahaha";
    $success=$data;
    echo json_encode(array('message'=>$message,'success'=>$success));

} else if($_REQUEST['relay1'] == 'false'){

	$serial->sendMessage("0");
    $read = $serial->readPort();
    echo $read;
    $message="hihihi";
    $success=$data;
    echo json_encode(array('message'=>$message,'success'=>$success));

}*/

$sql = $konfig->query("SELECT kondisi FROM relay WHERE id=1");
$ambil = $konfig->fetchArray($sql);
$kondisi = $ambil["kondisi"];
$serial->sendMessage($kondisi);
    $read = $serial->readPort();
    echo $read;
$serial->deviceClose();

$serial->confBaudRate(38400);

?>