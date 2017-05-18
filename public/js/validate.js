// function validate() {
// 	if (document.myform.fullname.value == "") {
// 		alert("pls provide ur name");
// 		document.myform.fullname.focus();
// 		return false;
// 	}

// 	if (document.myform.email.value == "") {
// 		alert("pls provide ur email");
// 		document.myform.email.focus();
// 		return false;
// 	}
// 	return(true);


// 	if (document.myform.company_name.value == "") {
// 		alert("pls provide ur Company name");
// 		document.myform.company_name.focus();
// 		return false;
// 	}
// 	return(true);


// 	if (document.myform.company_address.value == "") {
// 		alert("pls provide ur Company address");
// 		document.myform.company_address.focus();
// 		return false;
// 	}
// 	return(true);

// 	if (document.myform.Contact.value == "") {
// 		alert("pls provide ur Contact");
// 		document.myform.Contact.focus();
// 		return false;
// 	}
// 	return(true);
// }


// function validateEmail() {
// 	var emailID = document.myform.email.value;
// 	atpos = emailID.indexOf("@");
// 	dotpos = emailID.indexOf(".");

// 	if (atpos < 1 || ( dotpos - atpos < 2)) {
// 		alert("pls enter correct email ID")
// 		document.myform.email.focus();
// 		return false;
// 	}
// 	return( true);
// }







$(document).ready(function(){
	$("#book_view").click(function () {
		var fullname = $("#view_fullname").val();
		var email = $("#view_email").val();
		var phone = $("#view_phone").val();
		var company_name = $("#view_company_name").val();
		var company_address = $("#view_company_address").val();
		

		// boolean

		var isValid = true;

		if (fullname == '') {
			isValid = false;
			$("#errorFullname").html("<div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Firstname Field cannot be empty</div>");
		}else{
			$("#errorFullname").html("")
		}

		if (email == '') {
			isValid = false;
			$("#errorEmail").html("<div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Email Field cannot be empty</div>");
		}else{
			$("#errorEmail").html("")
		}

		if (phone == '') {
			isValid = false;
			$("#errorPhone").html("<div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Phone Field cannot be empty</div>");
		}else{
			$("#errorPhone").html("")
		}

		if (company_name == '') {
			isValid = false;
			$("#errorCompany_name").html("<div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Company name Field cannot be empty</div>");
		}else{
			$("#errorCompany_name").html("")
		}

		if (company_address == '') {
			isValid = false;
			$("#errorCompany_address").html("<div class='alert alert-danger alert-dismissable'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>Company address Field cannot be empty</div>");
		}else{
			$("#errorCompany_address").html("")
		}
	});
});