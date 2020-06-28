$("button#btnsubmit").click(function(){
	if($("#username").val()=="" || $("#username").val()=="")
		$("div#ack").html("Enter all fields");
	else
		$.post($("#myform").attr("action"),
			$("#myform : input").serializeArray(),function(data){
				$("div#ack").html(data);
			});
	$("#myform").submit(function(){
		return false;
	});
});