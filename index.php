<?php
include("conf/PhpSerial.php");
?>

<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Arduino Controll</title>
  <meta name="description" content="demonstration of some noty capabilities">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/materialdesignicons.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/arduino-style.css" />
  
  <script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.form.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
  <style type="text/css">
   .arduino-right-img {
     position: absolute;
     top: 44%;
     left: 82%;
    }
   .arduino-right-img img {
     width: 280px;
     height: auto;
    }
  </style>

</head>
<body>

  
  <div class="arduino-right-img">
    <img src="assets/img/icon/03.png">
  </div>
  <div class="arduino-header">
     <img src="assets/img/icon/02.png">
	 <h5 class="blue-text text-darken-1">Arduino</h5>
	 <span class="red-text text-lighten-2">Web Controll</span>
  </div>

  <div class="container">
  	<div class="arduino-body">
        <div class="tbl-header green-text text-darken-1"><i class="mdi mdi-table-large"></i> Table Data Controll 
          <button type="nutton" class="waves-effect eaves-light btn btn-floating right green lighten-1" data-toggle="modal" data-target="#tambah-data"><i class="mdi mdi-plus"></i></button>
        </div>
          <table class="stiped">
             <thead>
      	         <tr>
      		        <th>No</th>
      		        <th>Temperatur</th>
      		        <th>Sensor</th>
      		        <th>Timestamp</th>
      	         </tr>
             </thead>

             <tbody>
                  <tr>
      		         <td>1</td>
      		         <td><div id="heading"></div></td>
      	         	<td><div id="headr2"></div></td>
      	         </tr>
             </tbody>
        </table>

        <div class="modal fade" id="tambah-data" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
           <div class="modal-dialog" role="document">
             <div class="modal-content">
               <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
                 <h4 class="modal-title" id="myModalLabel">Tambah data</h4>
              </div>

             <div class="modal-body">
                <form data-toggle="validator" action="api/create.php" method="POST">

                 <div class="form-group">
                   <label class="control-label" for="title">Temperature:</label>
                   <input type="text" name="temperatur" class="form-control" data-error="Mohon isi temperatur" required />
                   <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                   <label class="control-label" for="title">Sensor</label>
                   <input type="text" name="sensor" class="form-control" data-error="Mohon isi sensor." required>
                   <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                  <button type="submit" class="btn blue darken-2 crud-submit">Submit</button>
                </div>

              </form>

          </div>
        </div>

      </div>
    </div>
     </div>

  <div class="arduino-switch">
    <div class="swc-header red-text text-darken-2"><i class="mdi mdi-xbox-controller mdi-24px"></i> Switch Controll</div>
      <form id="myForm" name="myform">
        <table class="centered responsive-table">
           <thead>
             <tr>
                <th>Relay 1</th>
                <th>Relay 2</th>
                <th>Relay 3</th>
            </thead>
            <tbody>
          	<tr>
          		<td>
          		   <div class="switch">
          		   	 <label>Off
          		   	   <input name="r1" type="checkbox" id="r1" class="r1" data-toggel="toggel" data-on="Enable" data-off="Disable">
          		   	   <span class="lever"></span>
          		   	   On
          		     </label>
          		   </div>
          		</td>
          		<td>
          		   <div class="switch">
          		   	 <label>Off
          		   	   <input name="r2" type="checkbox" id="r2" class="r2" data-toggel="toggel" data-on="Enable" data-off="Disable">
          		   	   <span class="lever"></span>
          		   	   On
          		     </label>
          		   </div>
          		</td>
          		<td>
                 <div class="switch">
                   <label>Off
                     <input name="r3" type="checkbox" id="r3" class="r3" data-toggel="toggel" data-on="Enable" data-off="Disable">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
            </tr>
            </tbody>
            <thead>
           <tr>
              <th>Relay 4</th>
              <th>Relay 5</th>
              <th>Relay 6</th>
            </thead>
            <tbody>
            <tr>
              <td>
                 <div class="switch">
                   <label>Off
                     <input name="r4" type="checkbox" id="r4" class="r4" data-toggel="toggel" data-on="Enable" data-off="Disable">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
              <td>
                 <div class="switch">
                   <label>Off
                     <input name="r5" type="checkbox" id="r5" class="r5" data-toggel="toggel" data-on="Enable" data-off="Disable">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
              <td>
                 <div class="switch">
                   <label>Off
                     <input name="r6" type="checkbox" id="r6" class="r6" data-toggel="toggel" data-on="Enable" data-off="Disable">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
            </tr>
            </tbody>
            <thead>
           <tr>
              <th>Relay 7</th>
              <th>Relay 8</th>
            </thead>
            <tbody>
          	<tr>
          		<td>
                 <div class="switch">
                   <label>Off
                     <input name="r7" type="checkbox" id="r7" class="r7" data-toggel="toggel" data-on="Enable" data-off="Disable">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
              <td>
                 <div class="switch">
                   <label>Off
                     <input name="r8" type="checkbox" id="r8" class="r8" data-toggel="toggel" data-on="Enable" data-off="Disable">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
            </tr>
            </tbody>
      </table>
    </form> 
  </div>

</div>


<script type="text/javascript" src="assets/js/bin//materialize.min.js"></script>
<script type="text/javascript" src="assets/js/tether.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
$(function(){
 $('#r1').change(function(){
  var relay1= $(this).prop('checked');
  $.ajax({
    type:'POST',
    dataType:'JSON',
    url:'conf/arduino-controll.php',
    data:'relay1='+relay1,
    success:function(data)
    {
      var data = eval(data);
      message  = data.message;
      success  = data.success;
      $('#heading').html(success);
      $('#body').html(message);
    }
  });
  return true;
 });

  $('#r2').change(function(){
  var relay2 = $(this).prop('checked');
  $.ajax({
    type:'POST',
    dataType:'JSON',
    url:'conf/arduino-controll.php',
    data:'relay2='+relay2,
    success:function(data)
    {
      var data = eval(data);
      mesr2  = data.message;
      sucr2  = data.sucr2;
      $('#headr2').html(sucr2);
      $('#body').html(message);
    }
  });
  return true;
 });

 $('#r3').change(function(){
  var relay3 = $(this).prop('checked');
  $.ajax({
    type:'POST',
    dataType:'JSON',
    url:'conf/arduino-controll.php',
    data:'relay3='+relay3,
    success:function(data)
    {
      var data = eval(data);
      message  = data.message;
      success  = data.success;
      $('#heading').html(success);
      $('#body').html(message);
    }
  });
  return true;
 });

 $('#r4').change(function(){
  var relay4 = $(this).prop('checked');
  $.ajax({
    type:'POST',
    dataType:'JSON',
    url:'conf/arduino-controll.php',
    data:'relay4='+relay4,
    success:function(data)
    {
      var data = eval(data);
      message  = data.message;
      success  = data.success;
      $('#heading').html(success);
      $('#body').html(message);
    }
  });
  return true;
 });

  $('#r5').change(function(){
  var relay5 = $(this).prop('checked');
  $.ajax({
    type:'POST',
    dataType:'JSON',
    url:'conf/arduino-controll.php',
    data:'relay5='+relay5,
    success:function(data)
    {
      var data = eval(data);
      message  = data.message;
      success  = data.success;
      $('#heading').html(success);
      $('#body').html(message);
    }
  });
  return true;
 });

  $('#r6').change(function(){
  var relay6 = $(this).prop('checked');
  $.ajax({
    type:'POST',
    dataType:'JSON',
    url:'conf/arduino-controll.php',
    data:'relay6='+relay6,
    success:function(data)
    {
      var data = eval(data);
      message  = data.message;
      success  = data.success;
      $('#heading').html(success);
      $('#body').html(message);
    }
  });
  return true;
 });

   $('#r7').change(function(){
  var relay7 = $(this).prop('checked');
  $.ajax({
    type:'POST',
    dataType:'JSON',
    url:'conf/arduino-controll.php',
    data:'relay7='+relay7,
    success:function(data)
    {
      var data = eval(data);
      message  = data.message;
      success  = data.success;
      $('#heading').html(success);
      $('#body').html(message);
    }
  });
  return true;
 });

    $('#r8').change(function(){
  var relay8 = $(this).prop('checked');
  $.ajax({
    type:'POST',
    dataType:'JSON',
    url:'conf/arduino-controll.php',
    data:'relay8='+relay8,
    success:function(data)
    {
      var data = eval(data);
      message  = data.message;
      success  = data.success;
      $('#heading').html(success);
      $('#body').html(message);
    }
  });
  return true;
 });

});
</script>
</body> 
<footer>
    <div class="footer-copyright" style="padding-left:15px;">
            © <?php echo date('Y') ?> <a href="#">Depisi Ristek HMTI</a> All rights reserved
    </div>
</footer>
</html>