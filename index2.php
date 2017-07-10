<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<title>Arduino Controll</title>
  	<meta name="description" content="demonstration of some noty capabilities">
  	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" />
  	<link rel="stylesheet" type="text/css" href="assets/css/materialize.min.css" />
  	<link rel="stylesheet" type="text/css" href="assets/css/materialdesignicons.min.css" />
  	<link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
  
  	<script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
  	<script type="text/javascript" src="assets/js/jquery.form.min.js"></script>
  	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

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
			<table class="responsive-table">
				<thead>
					<th><i class="icon"><img src="assets/img/element/Data-device-LOGO.png"></i></th>
				</thead>
				<tbody>
					<tr>
						<td><i class="icon"><img src="assets/img/element/Data-device-temp.png"></i></td>
						<td class="result-body"><div id="temp"></div></td>
					</tr>
					<tr>
						<td><i class="icon"><img src="assets/img/element/Data-device-hum.png"></i></td>
						<td class="result-body"><div id="kelembaban"></div></td>
					</tr>
					<tr>
						<td><i class="icon"><img src="assets/img/element/Data-device-light.png"></i></td>
						<td class="result-body"><div id="hujan"></div></td>
					</tr>
					<tr>
						<td><i class="icon"><img src="assets/img/element/Data-device-wat.png"></i></td>
						<td class="result-body"><div id="cahaya"></div></td>
					</tr>
					<tr>
						<td><i class="icon"><img src="assets/img/element/Data-device-gar.png"></i></td>
						<td class="result-body"><div id="pintu"></div></td>
					</tr>
					<tr>
						<td><i class="icon"><img src="assets/img/element/Data-device-rain.png"></i></td>
						<td class="result-body"><div id="air"></div></td>
					</tr>
					<tr>
						<td>
							<button type="button" id="add-more" class="refresh waves-effect eaves-light btn blue darken-4">
								<i class="mdi mdi mdi-refresh mdi-32px right"></i>
								Refresh Data
							</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>

		<div class="col-sm-6" style="background: url(assets/img/layout.png) no-repeat;background-position: cover;">
			<form>
				<table class="responsive-table">
					<thead>
						<i class="icon"><img src="assets/img/element/switch-control relay-01-LOGO.png"></i>
					</thead>
					<tbody>
						<tr>
							<td>Relay 1</td>
							<td>
								<div class="switch">
									<label>
										On
										<input type="checkbox" name="relay1" class="relay" data-name="relay1" id="r1">
										<span class="lever"></span>
										Off
									</label>
								</div>
							</td>
						
							<td>Relay 2</td>
							<td>
								<div class="switch">
									<label>
										On
										<input type="checkbox" name="relay2" class="relay" data-name="relay2" id="r2">
										<span class="lever"></span>
										Off
									</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>Relay 3</td>
							<td>
								<div class="switch">
									<label>
										On
										<input type="checkbox" name="relay3" class="relay" data-name="relay3" id="r3">
										<span class="lever"></span>
										Off
									</label>
								</div>
							</td>
					
							<td>Relay 4</td>
							<td>
								<div class="switch">
									<label>
										On
										<input type="checkbox" name="relay4" class="relay" data-name="relay4" id="r4">
										<span class="lever"></span>
										Off
									</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>Relay 5</td>
							<td>
								<div class="switch">
									<label>
										On
										<input type="checkbox" name="relay5" class="relay" data-name="relay5" id="r5">
										<span class="lever"></span>
										Off
									</label>
								</div>
							</td>
						
							<td>Relay 6</td>
							<td>
								<div class="switch">
									<label>
										On
										<input type="checkbox" name="relay6" class="relay" data-name="relay6" id="r6">
										<span class="lever"></span>
										Off
									</label>
								</div>
							</td>
						</tr>
						<tr>
							<td>Relay 7</td>
							<td>
								<div class="switch">
									<label>
										On
										<input type="checkbox" name="relay7" class="relay" data-name="relay7" id="r7">
										<span class="lever"></span>
										Off
									</label>
								</div>
							</td>
						
							<td>Relay 8</td>
							<td>
								<div class="switch">
									<label>
										On
										<input type="checkbox" name="relay8" class="relay" data-name="relay8" id="r8">
										<span class="lever"></span>
										Off
									</label>
								</div>
							</td>
						</tr>
					</tbody>
				</table>
			</form>
		</div>
	</div>
</div>
</body>
</html>