$(document).ready(function() {

$('#upload').click(function() {


  $.ajax({
    url : "dpupload.php",
type:"post",
  data: myFormData,
  processData: false, // important
    contentType: false,
    success : function(data) {
  $('#target').html(data);
},
error : function(){
  alert("error errrrr");
}

  });
});
});
