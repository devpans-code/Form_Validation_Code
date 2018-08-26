$(function() 
{     
	var Mobile = /^([0|\+[0-9]{1,5})?([6-9][0-9]{9})$/; // Use for Mobile

	var Landline = /^[0-9]{3}$/;

	var Phone = /^[1-9]{1}[0-9]{7}$/;

	var Pincode = /^[1-9][0-9]{5}$/; // Use for Pincode

	var Name  = /^[A-Z]{1}[a-z]+$/;	//use for Name, City Name and State Name

	$.validator.addMethod("validate_Some",function(value)
	{
		if(Name.test(value))
		{
			return true;
		}
		else
		{
			return false;
		}
	}, "<i style='color:red;font-weight:bold;font-size:80%;'>First Letter is Capital and others are Small</i>");

	$.validator.addMethod("check_landline",function(value)
	{
		if(Landline.test(value))
		{
			return true;
		}
		else
		{
			return false;
		}
	}, "<i style='color:red;font-weight:bold;font-size:80%;'>Wrong Landline Code</i>");

	$.validator.addMethod("check_phone",function(value)
	{
		if(Phone.test(value))
		{
			return true;
		}
		else
		{
			return false;
		}
	}, "<i style='color:red;font-weight:bold;font-size:80%;'>Wrong Number, Start with 1 to 9</i>");

	$.validator.addMethod("check_mobile",function(value)
	{
		if(Mobile.test(value))
		{
			return true;
		}
		else
		{
			return false;
		}
	}, "<i style='color:red;font-weight:bold;font-size:80%;'>Mobile Number not valid, Number Start with 6/7/8/9</i>");

	

	$.validator.addMethod("check_pincode",function(value)
	{
		if(Pincode.test(value))
		{
			return true;
		}
		else
		{
			return false;
		}
	}, "<i style='color:red;font-weight:bold;font-size:80%;'>Pincode is Not Valid</i>");

	$("#Register_Form").validate(
	{
		rules:
		{	
			fname:
			{
				required: true,
				validate_Some: true,
				minlength:3
			},

			lname:
			{
				required: true,
				validate_Some: true,
				minlength: 3
			},

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

			password2:
			{
				required: true,
				minlength: 6,
				equalTo : "#password"
			},

			landline:
			{
				required: true,
				check_landline: true,
				minlength: 3
			},

			phone:
			{
				required: true,
				check_phone: true,
				minlength: 8
			},

			mobile:
			{
				required: true,
				check_mobile:  true,
				minlength: 10
			},

			add1:
			{
				required: true,
				minlength: 3
			},

			add2:
			{
				required: true,
				minlength: 3
			},

			city:
			{
				required: true,
				validate_Some: true,
				minlength: 3
			},

			state:
			{
				required: true,
				validate_Some: true,
				minlength: 3
			},

			pincode:
			{
				required: true,
				check_pincode: true,
				minlength: 6
			},

			image:
			{
				required: true
			}
		},

		messages:
		{
			fname:
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 3 or more than 3 Characters</i>"
			},

			lname:
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 3 or more than 3 Characters</i>"
			},

			email: 
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				email: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Enter Valid Email ID</i>"
			},

			password: 
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 6 or more than 6 Characters</i>"
			},

			password2:
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 6 or more than 6 Characters</i>",
				equalTo: "<i style='color:red;font-weight:bold;font-size:80%;'>Password and Re-Enter Password Both are not match</i>"
			},

			landline:
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Not Valid</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 3 only</i>"
			},

			phone:
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 8 only</i>"
			},

			mobile:
			{	
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 10</i>"
			}, 

			add1:
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 3 or more than 3 Characters</i>"
			},

			add2:
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 3 or more than 3 Characters</i>"
			},

			city:
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 3 or more than 3 Characters</i>"
			},

			state:
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 3 or more than 3 Characters</i>"
			},

			pincode:
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Fill details</i>",
				minlength: "<i style='color:red;font-weight:bold;font-size:80%;'>Length must be 6 or more than 6</i>"
			},

			image:
			{
				required: "<i style='color:red;font-weight:bold;font-size:80%;'>Please, Select Image</i>"
			}
		}
	});
});