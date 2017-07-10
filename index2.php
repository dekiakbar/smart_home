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
		<div class="col-sm-6" style="background: url(assets/img/layout.png);background-position: cover;">
			<table>
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

		<div class="col-sm-6" style="background: url(assets/img/layout.png);background-position: cover;"></div>
	</div>
</div>
</body>
</html>