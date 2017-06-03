

    $('.icon').click(function(){
      $(this).toggleClass('activ');
        var a = $("#search").val();
      var b =$(this).attr('id');

      $.ajax({
          url: "searchresultcat.php",
          data: {search: a, t : b},
          type: "POST",
          success:function(data){
              $(".results").html(data);
          },
          error:function (){}
      });
    });
