

      $('#searc').keyup(function(){
        $(".headda").addClass("opa");
        var a = $("#searc").val();
        if(a != "")
        {
      $.ajax({
          url: "searchuserresult.php",
          data: {search: a},
          type: "POST",
          success:function(data){
              $(".result").html(data);
          },
          error:function (){}
      });
      }
    });
