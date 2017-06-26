<?php

if($_POST['relay2'] == 'true'){
	$mesr2 = 'Hey my button is enabled';
	$sucr2 = 'On';
	echo json_encode(array('mesr2'=>$mesr2,'sucr2'=>$sucr2));
} else  if($_POST['relay2'] == 'false'){
	$mesr2 = 'Hey my button is disabled.';
	$sucr2 = 'Off';
	echo json_encode(array('mesr2'=>$mesr2,'sucr2'=>$sucr2));
}

?>