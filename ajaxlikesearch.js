$('.actionlike').on('click', function(){
    var pi = $(this).attr('id');
    $(this).toggleClass('re');
    $.ajax({
        url: "likesearch.php",
        data: {pid: pi},
        type: "POST",
        success:function(data){
            $("#lik" + pi).html(data);
        },
        error:function (){}
    });
});
