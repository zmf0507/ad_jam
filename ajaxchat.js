$("body").load(function(){
var a = "zmf";
	$.ajax({
			url: "message.php",
			data: {pid: a},
			type: "POST",
			success:function(data){
					$("#ress").html(data);
			},
			error:function (){}
	});

});
