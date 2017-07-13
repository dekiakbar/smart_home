<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Arduino Controll</title>
  	<meta name="description" content="demonstration of some noty capabilities">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css" />
  	<link rel="stylesheet" type="text/css" href="assets/css/arduino-style.css">
  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  	<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css" />
  	<link rel="stylesheet" type="text/css" href="assets/css/materialdesignicons.min.css" />
  	<link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
  
  	<script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
  	<script type="text/javascript" src="assets/js/jquery.form.min.js"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  	<style type="text/css">
  		
  	</style>

</head>
<body>

	<header>
		<div class="container-fluid">
			<div class="col-sm-12 text-left">
				<h3><img class="img-responsive" src="assets/img/logo.png"> SMART HOME</h3>
			</div>
		</div>	
	</header>

	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="container-fluid text-center">
					<h4><i class="icon"><img class="img-responsive" src="assets/img/element/Data-device-LOGO.png"></i> Data Device</h4>
					<div class="row logo">
						<div class="col-sm-8">
							<i class="icon"><img src="assets/img/element/Data-device-temp.png"></i>Temperature :
						</div>
						<div class="col-sm-4">
							<div id="temp" class="status">100.5C</div>
						</div>
					</div>
					<div class="row logo">
						<div class="col-sm-8">
							<i class="icon"><img src="assets/img/element/Data-device-hum.png"></i>Humidity :
						</div>
						<div class="col-sm-4 text-center">
							<div id="kelembaban" class="status">100%</div>
						</div>
					</div>
					<div class="row logo">
						<div class="col-sm-8">
							<i class="icon"><img src="assets/img/element/Data-device-light.png"></i>Light Sensor :
						</div>
						<div class="col-sm-4 text-center">
							<div id="hujan" class="status">100%</div>
						</div>
					</div>
					<div class="row logo">
						<div class="col-sm-8">
							<i class="icon"><img src="assets/img/element/Data-device-wat.png"></i>Water Sensor :
						</div>
						<div class="col-sm-4 text-center">
							<div id="cahaya" class="status">100%</div>
						</div>
					</div>
					<div class="row logo">
						<div class="col-sm-8">
							<i class="icon"><img src="assets/img/element/Data-device-gar.png"></i> Garage's Door :
						</div>
						<div class="col-sm-4 text-center">
							<div id="pintu" class="status">Open</div>
						</div>
					</div>
					<div class="row logo">
						<div class="col-sm-8">
							<i class="icon"><img src="assets/img/element/Data-device-rain.png"></i>Rain Sensor :
						</div>
						<div class="col-sm-4 text-center">
							<div id="air" class="status">Rain</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-12 text-center">
							<button type="button" id="add-more" class="refresh waves-effect eaves-light btn blue darken-4"><i class="mdi mdi mdi-refresh mdi-32px right"></i> Refresh Data</button>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6">
				<div class="container-fluid text-center">
					<h4><i class="icon"><img class="img-responsive" src="assets/img/element/switch-control relay-01-LOGO.png"></i>Switch Control</h4>
					<form class="form-inline">
						<div class="form-group">
							<h5>Relay 1 </h5>
							<div class="switch">
								<label>
								<input type="checkbox" name="relay1" class="relay" data-name="relay1" id="r1">
								<span class="lever"></span>
								</label>
							</div>
						</div>
						<div class="form-group">
							<h5>Relay 2 </h5>
							<div class="switch">
								<label>
								<input type="checkbox" name="relay2" class="relay" data-name="relay2" id="r2">
								<span class="lever"></span>
								</label>
							</div>
						</div>
						<div class="form-group">
							<h5>Relay 3 </h5>
							<div class="switch">
								<label>
								<input type="checkbox" name="relay3" class="relay" data-name="relay3" id="r3">
								<span class="lever"></span>
								</label>
							</div>
						</div>
						<div class="form-group">
							<h5>Relay 4 </h5>
							<div class="switch">
								<label>
								<input type="checkbox" name="relay4" class="relay" data-name="relay4" id="r4">
								<span class="lever"></span>
								</label>
							</div>
						</div>
						<div class="form-group">
							<h5>Relay 5 </h5>
							<div class="switch">
								<label>
								<input type="checkbox" name="relay5" class="relay" data-name="relay5" id="r5">
								<span class="lever"></span>
								</label>
							</div>
						</div>
						<div class="form-group">
							<h5>Relay 6 </h5>
							<div class="switch">
								<label>
								<input type="checkbox" name="relay6" class="relay" data-name="relay6" id="r6">
								<span class="lever"></span>
								</label>
							</div>
						</div>
						<div class="form-group">
							<h5>Relay 7 </h5>
							<div class="switch">
								<label>
								<input type="checkbox" name="relay7" class="relay" data-name="relay7" id="r7">
								<span class="lever"></span>
								</label>
							</div>
						</div>
						<div class="form-group">
							<h5>Relay 8 </h5>
							<div class="switch">
								<label>
								<input type="checkbox" name="relay8" class="relay" data-name="relay8" id="r8">
								<span class="lever"></span>
								</label>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	<footer>
		<div class="row">
			<div class="col-sm-8">
				<h6><?php echo date('Y') ?> © <a href="#">dept.ristek.hmti</a> All rights reserved</h6>
			</div>
			<div class="col-sm-4 text-right">
				<h5>Supported by <img src="assets/img/footer-02.png"></h5>
			</div>
		</div>
	</footer>
	
	<script type="text/javascript" src="assets/js/bin//materialize.min.js"></script>
 	<script type="text/javascript" src="assets/js/tether.min.js"></script>
  	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  	<script type="text/javascript" src="assets/js/sweetalert.min.js"></script>
  	<script type="text/javascript" src="assets/js/arduino-javascript.js"></script>
</body>
</html>