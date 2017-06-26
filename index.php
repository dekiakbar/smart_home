
<?php
require_once("conf/config.php");
$db_handle = new config();

$sql = "SELECT * from data_log";
$logs = $db_handle->runSelectQuery($sql);
$no=1;
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
  <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
  
  <script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.form.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  
<style type="text/css">
.arduino-switch {
    position: absolute;
    margin-top: 9.3em;
    left: 58%;
    font-size: 20px;
    font-weight: 500;
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
          <button type="nutton" id="add-more" class="waves-effect eaves-light btn right green lighten-1" onClick="createNew();"><i class="mdi mdi mdi-plus mdi-32px right"></i> Tambah Data</button>
        </div>
          <table class="stiped centered">
             <thead>
      	         <tr>
                  <th>Tanggal dan waktu</th>
      		        <th>Temperatur</th>
      		        <th>Sensor</th>
                  <th>Action</th>
      	         </tr>
             </thead>

             <tbody id="table-body">
              <?php 
               if(!empty($logs))
               {
                foreach ($logs as $l) {
                  ?>
                   <tr class="table-row" id="table-row-<?php echo $l["id"]; ?>">
                    <td><?php echo $l['timestamp']; ?></td>
                    <td><?php echo $l["temperatur"]; ?></td>
                    <td><?php echo $l["moisture"]; ?></td>
                    <td><a href="#" class="btn btn-flat" onclick="deleteRecord(<?php echo $l["id"]; ?>);"><i class="mdi mdi-delete"></i></a></td>
                   </tr>
              <?php
                 }
                }
               ?>
             </tbody>
        </table>
    </div>
 </div>

  <div class="arduino-switch">
    <div class="swc-header red-text text-darken-2"><i class="mdi mdi-rotate-315 mdi-xbox-controller mdi-32px"></i> Switch Controll</div>
     <form id="myForm" name="myform" >
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
          		   	   <input type="checkbox" id="r1" class="relay" name="relay1" data-name="relay1">
          		   	   <span class="lever"></span>
          		   	   On
          		     </labekl>
          		   </div>
          		</td>
          		<td>
          		   <div class="switch">
          		   	 <label>Off
          		   	   <input type="checkbox" id="r2" class="relay"  name="relay2" data-name="relay2">
          		   	   <span class="lever"></span>
          		   	   On
          		     </labekl>
          		   </div>
          		</td>
          		<td>
          		   <div class="switch">
          		   	 <label>Off
          		   	   <input type="checkbox" id="r3" class="relay"  name="relay3" data-name="relay3">
          		   	   <span class="lever"></span>
          		   	   On
          		     </labekl>
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
          		   	   <input type="checkbox" id="r4" class="relay"  name="relay4" data-name="relay4">
          		   	   <span class="lever"></span>
          		   	   On
          		     </labekl>
          		   </div>
          		</td>
          		<td>
          		   <div class="switch">
          		   	 <label>Off
          		   	   <input type="checkbox" id="r5" class="relay"  name="relay5" data-name="relay5">
          		   	   <span class="lever"></span>
          		   	   On
          		     </labekl>
          		   </div>
          		</td>
          		<td>
          		   <div class="switch">
          		   	 <label>Off
          		   	   <input type="checkbox" id="r6" class="relay"  name="relay6" data-name="relay6">
          		   	   <span class="lever"></span>
          		   	   On
          		     </labekl>
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
          		   	   <input type="checkbox" id="r7" class="relay"  name="relay7" data-name="relay7">
          		   	   <span class="lever"></span>
          		   	   On
          		     </labekl>
          		   </div>
          		</td>
          		<td>
          		   <div class="switch">
          		   	 <label>Off
          		   	   <input type="checkbox" id="r8" class="relay"  name="relay8" data-name="relay8">
          		   	   <span class="lever"></span>
          		   	   On
          		     </labekl>
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
<script type="text/javascript" src="assets/js/sweetalert.min.js"></script>
<script type="text/javascript" src="assets/js/arduino-javascript.js"></script>
</body>
<footer>
    <div class="footer-copyright" style="padding-left:15px;">
            © <?php echo date('Y') ?> <a href="#">Depisi Ristek HMTI</a> All rights reserved
    </div>
</footer>
</html>