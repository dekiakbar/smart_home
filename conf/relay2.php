<?php

if($_POST['name'] == 'relay1'){
  	
  	if($_POST['relay'] == 'true') {
	  $mesr2 = 'Hey my button is enabled';
	  $sucr2 = 'Relay 1 On';
    }else  if($_POST['relay'] == 'false'){
	  $mesr2 = 'Hey my button is disabled.';
	  $sucr2 = 'Relay 1 Off';
    }

}else if($_POST['name'] == 'relay2'){

	if($_POST['relay'] == 'true') {
  	  $mesr2 = 'Hey my button is enabled';
	  $sucr2 = 'Relay 2 On';
    }else  if($_POST['relay'] == 'false'){
	  $mesr2 = 'Hey my button is disabled.';
	  $sucr2 = 'Relay 2 Off';
    }
}else if($_POST['name'] == 'relay3'){

	if($_POST['relay'] == 'true') {
	 $mesr2 = 'Hey my button is enabled';
	 $sucr2 = 'Relay 3 On';
    }else  if($_POST['relay'] == 'false'){
	 $mesr2 = 'Hey my button is disabled.';
	 $sucr2 = 'Relay 3 Off';
    }
}else if($_POST['name'] == 'relay4'){

	if($_POST['relay'] == 'true') {
	 $mesr2 = 'Hey my button is enabled';
	 $sucr2 = 'Relay 4 On';
    }else  if($_POST['relay'] == 'false'){
	 $mesr2 = 'Hey my button is disabled.';
	 $sucr2 = 'Relay 4 Off';
    }
}

    echo json_encode(array('mesr2'=>$mesr2,'sucr2'=>$sucr2));

?>