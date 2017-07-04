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
  <link rel="stylesheet" type="text/css" href="assets/css/sweetalert.css">
  
  <script type="text/javascript" src="assets/js/jQuery-2.1.4.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery.form.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <style type="text/css">
html, body {
  background: url(assets/img/background.png) no-repeat;
  background-size: cover;
  font-family: 'Lato', Calibri, Arial, sans-serif;
}
.arduino-header {
  position: absolute;
  margin: 4em 30px;
}
.arduino-header img {
  margin: 3em 0;
  width: 450px;
}
.arduino-body {
  position: absolute;
  margin: 9em -3em;
}
.icon img{
  width: auto;
  height: 40px;
}
.arduino-body-header img {
  margin-left: 4em;
  width: auto;
  height: 65px;
}
.arduino-body .tbl-header {
  margin-bottom: 15px;
  font-size: 23px;
  font-weight: 500;
}
.arduino-body table {
  position: absolute;
  width: 500px;
  height: 600px;
  background: url(assets/img/layout.png) no-repeat;
  background-size: cover;
  box-shadow: 0 5px 8px rgba(0, 0, 0, 0.1);
}
.arduino-body tbody {
  position: absolute;
  margin: 7em 20px;
}
.arduino-body thead {
  position: absolute;
  margin-left: 10px;
  border: none;
}
.arduino-body tbody .result-body {
  position: absolute;
  margin-left: -12em;
  background: url(assets/img/element/nan.nan.png) no-repeat;
  width: 120px;
  height: 60px;
}
.arduino-body .refresh {
  margin: 10px 9em;
}
.arduino-switch {
    position: absolute;
    margin: 6.7em -4em;
    left: 58%;
    font-size: 20px;
    font-weight: 500;
}
.arduino-switch-header img {
  margin-left: 10px;
  width: auto;
  height: 65px;
}
.arduino-switch table {
  position: absolute;
  margin-top: 0em;
  width: 480px;
  height: 500px;
  background: url(assets/img/layout.png) no-repeat;
  background-size: cover;
}
.arduino-switch thead {
  position: absolute;
  margin: 0 10px;
  border: none;
}
.arduino-switch tbody {
  position: absolute;
  margin: 6em 2em;
}
.arduino-switch .label-relay {
  font-size: 20px;
}
.arduino-img img{
  height: auto;
  width: 300px;
  float: right;
  margin-top:180px;
}
.arduino-logo img{
  height: 100px;
  width: auto;
  float: right;
  margin: 20px -200px auto auto;
}
.arduino-header {
  margin-top: -40px;
  padding: 0;
}
footer {
  position: absolute;
  top: 100%;
  width: 100%;
  height: 70px;
  background: url(assets/img/footer-bar.png) no-repeat;
  color:#000;
  line-height: 70px;
  margin-top: 100px;
}
footer a {
  color: #ffffff;
}
.footer-copyright {
  margin-left: 10px;
  background: url(assets/img/footer-bar.png) no-repeat;
  color: #ffffff;
  font-size: 20px;
}
.footer-copyright img {
  height: auto;
  width: 350px;
  position: absolute;
  margin: 0px;
  left: 67%;
}
.switch label input[type=checkbox]:checked + .lever {
  background-color: #A5D6A7;
  height: 15px;
}

.switch label input[type=checkbox]:checked + .lever:after {
  background-color: #81C784;
  left: 24px;
}
  </style>

</head>
<body>
  <div class="arduino-header">
    <img src="assets/img/logo.png">
  </div>

  <div class="container">
    <div class="arduino-body">
          <table>
             <thead>
                 <tr>
                  <th><i class="arduino-body-header"><img src="assets/img/element/Data-device-LOGO.png"></i></th>
                 </tr>
             </thead>

             <tbody>
                  <tr>
                   <td><i class="icon"><img src="assets/img/element/Data-device-temp.png"></i></td>
                   <td class="result-body"><div id="temp"></div></td>
                  <td></td>
                 </tr>
                 <tr>
                   <td><i class="icon"><img src="assets/img/element/Data-device-hum.png"></i></td>
                   <td class="result-body"><div id="kelembaban"></div></td>
                  <td></td>
                 </tr>
                 <tr>
                   <td><i class="icon"><img src="assets/img/element/Data-device-light.png"></i></td>
                   <td class="result-body"><div id="hujan"></div></td>
                  <td></td>
                 </tr>
                 <tr>
                   <td><i class="icon"><img src="assets/img/element/Data-device-wat.png"></i></td>
                   <td class="result-body"><div id="cahaya"></div></td>
                  <td></td>
                 </tr>
                 <tr>
                   <td><i class="icon"><img src="assets/img/element/Data-device-gar.png"></i></td>
                   <td class="result-body"><div id="pintu"></div></td>
                  <td></td>
                 </tr>
                  <tr>
                   <td><i class="icon"><img src="assets/img/element/Data-device-rain.png"></i></td>
                   <td class="result-body"><div id="air"></div></td>
                  <td></td>
                 </tr>
                 <tr>
                  <td> 
                    <button type="button" id="add-more" class="refresh waves-effect eaves-light btn blue darken-4" style="width:200px;"><i class="mdi mdi mdi-refresh mdi-32px right"></i> Refresh Data</button>
                  </td>
                </tr>
             </tbody>
        </table>
    </div>
  </div>

  <div class="arduino-switch">
     <form id="myForm" name="myform" >
      <table class="responsive-table">
         <thead>
           <th><i class="arduino-switch-header"><img src="assets/img/element/switch-control relay-01-LOGO.png"></i></th>
          </thead>
          <tbody>
            <tr>
              <td class="label-relay">Relay 1</td>
              <td>
                 <div class="switch">
                   <label>Off
                     <input type="checkbox" id="r1" class="relay" name="relay1" data-name="relay1">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
              <td class="label-relay">Relay 2</td>
              <td>
                 <div class="switch">
                   <label>Off
                     <input type="checkbox" id="r2" class="relay"  name="relay2" data-name="relay2">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
            </tr>
            <tr>
              <td class="label-relay">Relay3</td>
              <td>
                 <div class="switch">
                   <label>Off
                     <input type="checkbox" id="r3" class="relay"  name="relay3" data-name="relay3">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
              <td class="label-relay">Relay 4</td>
              <td>
                 <div class="switch">
                   <label>Off
                     <input type="checkbox" id="r4" class="relay"  name="relay4" data-name="relay4">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
            </tr>
            <tr>
              <td class="label-relay">Relay 5</td>
              <td>
                 <div class="switch">
                   <label>Off
                     <input type="checkbox" id="r5" class="relay"  name="relay5" data-name="relay5">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
              <td class="label-relay">Relay 6</td>
              <td>
                 <div class="switch">
                   <label>Off
                     <input type="checkbox" id="r6" class="relay"  name="relay6" data-name="relay6">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
            </tr>
            <tr>
              <td class="label-relay">Relay 7</td>
              <td>
                 <div class="switch">
                   <label>Off
                     <input type="checkbox" id="r7" class="relay"  name="relay7" data-name="relay7">
                     <span class="lever"></span>
                     On
                   </label>
                 </div>
              </td>
              <td class="label-relay">Relay 8</td>
              <td>
                 <div class="switch">
                   <label>Off
                     <input type="checkbox" id="r8" class="relay"  name="relay8" data-name="relay8">
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

  <script type="text/javascript" src="assets/js/bin//materialize.min.js"></script>
  <script type="text/javascript" src="assets/js/tether.min.js"></script>
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="assets/js/sweetalert.min.js"></script>
  <script type="text/javascript" src="assets/js/arduino-javascript.js"></script>
</body>
<footer>
    <div class="footer-copyright">
      <?php echo date('Y') ?> © <a href="#">dept.ristek.hmti</a> All rights reserved<img src="assets/img/footer-02.png">
    </div>
</footer>
</html>