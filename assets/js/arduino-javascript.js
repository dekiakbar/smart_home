  $('.refresh').click(function(){
    $.ajax({
      type:'POST',
      dataType:'JSON',
      url:'conf/cek.php',
      data:{'submit':true},
      success:function(data)
      {
        var data = eval(data);
      kel  = data.kel;
      temp  = data.temp;
      hujan = data.hujan;
      cahaya = data.cahaya;
      pintu = data.pintu;
      air = data.air;
      $('#temp').html(temp);
      $('#kelembaban').html(kel);
      $('#hujan').html(hujan);
      $('#cahaya').html(cahaya);
      $('#pintu').html(pintu);
      $('#air').html(air);
      }
    });
});

$(function(){
  $('.relay').change(function(){
   var relay = $(this).prop('checked');
   var name = $(this).attr('data-name');
  $.ajax({
    type:'POST',
    dataType:'JSON',
    url:'conf/arduino-controll.php',
    data:{'relay':relay,'name':name},
    success:function(data)
    {
      var data = eval(data);
      sucr  = data.sucr;
      Materialize.toast(sucr, 3000, 'rounded');
    }
  });
 });
});
