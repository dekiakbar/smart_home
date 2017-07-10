<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Arduino Controll</title>
  	<meta name="description" content="demonstration of some noty capabilities">
  	<meta name="viewport" content="width=device-width, initial-scale=1">

  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  	<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css" />
  	<link rel="stylesheet" type="text/css" href="assets/css/materialdesignicons.min.css" />
  	<link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
  
  	<script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
  	<script type="text/javascript" src="assets/js/jquery.form.min.js"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  	<style type="text/css">
  		.form-group{
  			margin: 0 auto;
  		}
  		.logo i img {
  			max-width: 50px;
  			height: auto;
  		}
  	</style>

</head>
<body style="background: url(assets/img/background.png);">

	<header>
		<div class="container-fluid">
			<div class="col-sm-12 text-left">
				<img src="assets/img/logo.png">
			</div>
		</div>	
	</header>

	<div class="container">
		<div class="row">
			<div class="col-sm-6" style="background: url(assets/img/layout.png) no-repeat;background-position: cover;">
				<div class="text-center">
					<h4><i class="icon"><img class="img-responsive" src="assets/img/element/Data-device-LOGO.png"></i> Data Device</h4>
					<div class="row logo">
						<div class="col-sm-6">
							<i class="icon"><img src="assets/img/element/Data-device-temp.png"></i>Temperature :
						</div>
						<div class="col-sm-6">
							<div id="temp"></div>
						</div>
					</div>
					<div class="row logo">
						<div class="col-sm-6">
							<i class="icon"><img src="assets/img/element/Data-device-hum.png"></i>Humididty :
						</div>
						<div class="col-sm-6">
							<div id="temp"></div>
						</div>
					</div>
					<div class="row logo">
						<div class="col-sm-6">
							<i class="icon"><img src="assets/img/element/Data-device-light.png"></i>Light Sensor :
						</div>
						<div class="col-sm-6">
							<div id="temp"></div>
						</div>
					</div>
					<div class="row logo">
						<div class="col-sm-6">
							<i class="icon"><img src="assets/img/element/Data-device-wat.png"></i>Water Sensor :
						</div>
						<div class="col-sm-6">
							<div id="temp"></div>
						</div>
					</div>
					<div class="row logo">
						<div class="col-sm-6">
							<i class="icon"><img src="assets/img/element/Data-device-gar.png"></i> Garage's Door :
						</div>
						<div class="col-sm-6">
							<div id="temp"></div>
						</div>
					</div>
					<div class="row logo">
						<div class="col-sm-6">
							<i class="icon"><img src="assets/img/element/Data-device-rain.png"></i>Rain Sensor :
						</div>
						<div class="col-sm-6">
							<div id="temp"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-sm-6" style="background: url(assets/img/layout.png) no-repeat;background-position: cover;">
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
</body>
</html>