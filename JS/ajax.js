$(document).ready(function()
{
	$("#ajax").click(function()
	{
		$.ajax(
		{
			url: "http://localhost/validateForm/index.php/New_model/check",		//response url link
			type: "POST",						//method name
			data: {name : $("#name").val()},	//insert data from userside
			dataType: "text",
			success:function(data)
			{
				alert(data);
			}	
		});
		return false;
	});
});