function createNew() {
  $("#add-more").hide();
  var data = '<tr class="table-row" id="new_row_ajax">' +
  '<td class="blue-text text-darken-2"><i class="mdi mdi-plus mdi-18px"></i> Tambah Data -></td>'+
  '<td contenteditable="true" id="int_temperatur" onBlur="addToHiddenField(this,\'temperatur\')"></td>' +
  '<td contenteditable="true" id="int_moisture" onBlur="addToHiddenField(this,\'moisture\')"></td>' +
  '<td><input type="hidden" id="temperatur"/><input type="hidden" id="moisture"/><span id="confirmAdd"><a href="#" onClick="addToDatabase()" class="ajax-action-links">Simpan</a> / <a href="#" onclick="cancelAdd();" class="ajax-action-links">Batal</a></span></td>' +  
  '</tr>';
  $("#table-body").append(data);
}
function cancelAdd() {
  $("#add-more").show();
  $("#new_row_ajax").remove();
}
function addToDatabase() {
  var temperatur = $("#temperatur").val();
  var moisture = $("#moisture").val();
  
    $("#confirmAdd").html('<img src="loaderIcon.gif" />');
    $.ajax({
    type: "POST",
    url: "api/tambah.php",
    data:'temperatur='+temperatur+'&moisture='+moisture,
    success: function(data){
      $("#new_row_ajax").remove();
      $("#add-more").show();
      Materialize.toast("Yahoo.. Berhasil menambah data..", 3000, 'rounded');
       $("#table-body").append(data);
    }
    });
}
function addToHiddenField(addColumn,hiddenField) {
  var columnValue = $(addColumn).text();
  $("#"+hiddenField).val(columnValue);
}

function deleteRecord(id) {

  swal({
     title: 'Apakah anda yakin ?',
     text: 'Ingin menghapus baris ini?',
     type: 'warning',
     html: true,
     confirmButtonColor: '#d9534f',
     showCancelButton: true,
     },function(){
     $.ajax({
       url: "api/delete.php",
       type: "POST",
       data:'id='+id,
       success: function(data){
         $("#table-row-"+id).remove();
        }
      });
       
        return false;
   
    });

}

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
