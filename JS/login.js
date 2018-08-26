$(function()
	{
		$("#Login_Form").validate(
		{
			rules:
			{
				email:
				{
					required: true,
					email: true
				},

				password:
				{
					required: true,
					minlength: 6
				},

				messages:
				{
					email:
					{
						required: "Please, Fill details",
						email: "Please, Enter Valid Email ID"
					},

					password:
					{
						required: "Please, Fill details",
						minlength: "Length must be 6 or more than 6 Characters"
					}
				}
			}

		});
	});