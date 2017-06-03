
    $(".submt").click(function(){
      var b = $(this).attr('id');
    var a = $("#input").val();
    $.ajax({
        url: "msg.php",
        data: {foruser: b , msg: a},
        type: "POST",
        success:function(data){
            $("#ress").html(data);
        },
        error:function (){}
    });
$("#input").val() = " ";
    });
