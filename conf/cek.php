<?php

if ($_POST['submit'] == 'true') {
	$kelembaban = shell_exec("python coba.py");
	sleep(2);
	$data = explode(",", $kelembaban);
}
    echo json_encode(array('kel'=>$data[1],'temp'=>$data[0],'hujan' => $data[2],'cahaya' => $data[3],'pintu' => $data[4],'air' => $data[5]));

?>