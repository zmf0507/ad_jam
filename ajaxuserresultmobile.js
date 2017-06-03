$('#icon').click(function() {
      $('.headda').toggleClass("bacg");
    $('#search').fadeToggle();
      $('#scoins').fadeToggle();
      $('#show').fadeToggle();
$('.main').toggleClass("over");
      $('input').keyup(function(){
        var a = $("#search").val();
        if(a != "")
        {
      $.ajax({
          url: "searchuserresult.php",
          data: {search: a},
          type: "POST",
          success:function(data){
              $(".results").html(data);
          },
          error:function (){}
      });
      }
    });


});
