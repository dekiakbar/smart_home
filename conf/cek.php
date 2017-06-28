<?php

if ($_POST['submit'] == 'true') {
	$mesr2 = 'Hey my button is enabled';
	$temp = shell_exec("python coba.py");
}
    echo json_encode(array('mesr2'=>$mesr2,'temp'=>$temp));

?>