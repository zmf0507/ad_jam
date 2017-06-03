$(document).ready(function(){
    $(".submt").click(function(){
      var b = $(this).attr('id');
    var a = $("#input").val();
        $.post("msg.php",
        {
          msg: a,
          foruser: b
        },
        function(data,status){
           return false;
        });

    });
});
