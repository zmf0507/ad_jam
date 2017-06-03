$("body").load(function(){
var a = $('#hid4').val();
	$.ajax({
			url: "poststudy.php",
			data: {uname: a},
			type: "POST",
			success:function(data){
					$("#ress").html(data);
			},
			error:function (){}
	});
	});
