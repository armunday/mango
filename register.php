<?php  require("header.html") ?>
<script type="text/javascript">
	function check(form1)
	{
		if(
		form1.u_name.value == "" ||
		form1.f_name.value == "" ||
		form1.pwd.value == "" ||
		form1.e_mail.value == ""||
		form1.gender.value == ""||
		form1.dob.value == ""||
		form1.add.value == ""||
		form1.sta.value == "" ||
		form1.cou.value == "" )
		{
		
			if (form1.u_name.value == "")
			{
				document.getElementById("a").innerHTML = "Please, Enter user name.";
				//alert("Please, Enter The Username");
			form1.u_name.form1.focus();
				
			}
			else
			{
				document.getElementById("a").innerHTML = "";
				//alert("Please, Enter The Username");
				form1.u_name.focus();
				
			}
			 if (form1.f_name.value == "")
			{
				document.getElementById("b").innerHTML = "Please, Enter full name.";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
				
			}
			else
			{
				document.getElementById("b").innerHTML = "";
				//alert ("Please,Please Enter The Fullname");
				form1.f_name.focus();
			}
			 if (form1.pwd.value == "")
			{
				document.getElementById("c").innerHTML = "Please, Enter password.";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();
				
			}
			else
			{
				document.getElementById("c").innerHTML = "";
				//alert ("Please,Please Enter The Password");
				form1.pwd.focus();

			}
			
			 if (form1.e_mail.value == "")
			{
				document.getElementById("d").innerHTML = "Please, Enter e-mail address.";
				//alert ("Please,Please Enter The E-mail Address");
				form1.e_mail.focus();
				
			}
			else
			{
				document.getElementById("d").innerHTML = "";
				//alert ("Please,Please Enter The E-mail Address");
				form1.e_mail.focus();
			}
			 if (form1.gender.value == "")
			{
				document.getElementById("spuid").innerHTML = "Please, Enter the gender.";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
				
			}else
			{
				document.getElementById("spuid").innerHTML = "";
				//alert("Please,Please Enter The Gender");
				form1.gender.focus();
			}
			 if (form1.dob.value == "")
			{
				document.getElementById("e").innerHTML = "Please, Enter date of birth.";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.dob.focus();
				
			}
			else
			{
				document.getElementById("e").innerHTML = "";
		//		alert ("Please,Please Enter The Date Of Birth");
				form1.dob.focus();

			}
			 if (form1.add.value == "")
			{
				document.getElementById("f").innerHTML = "Please, Enter address.";
				//alert ("Please,Please Enter The Address");
				form1.add.focus();
				
			}
			else
			{
				document.getElementById("f").innerHTML = "";
				//alert ("Please,Please Enter The Address");
				form1.add.focus();
			}
			 if (form1.sta.value == "")
			{
				document.getElementById("g").innerHTML = "Please, Enter state.";
				//alert ("Please,Please Enter The State");
				form1.sta.focus();
				
			}
			else
			{
				document.getElementById("g").innerHTML = "";
				//alert ("Please,Please Enter The State");
				form1.sta.focus();

			}
			 if (form1.cou.value == "")
			{
				document.getElementById("h").innerHTML = "Please, Enter country.";
				//alert ("Please,Please Enter The Country");
				form1.cou.focus();
				
			}
			else
			{
				document.getElementById("h").innerHTML = "";
				//alert ("Please,Please Enter The Country");
				form1.cou.focus();
			}
			return false;
		}
		else
			return true;
	}
</script>

<div class="container">
    <div class="row">
		<form role="form" action="registerH.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
            <div class="col-lg-6">
                <div class="well well-sm"><strong>Sing Up</strong></div>
                <div class="form-group">
                    <label for="InputName">User Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="u_name" id="InputName" placeholder="User Name" required>
                        <span class="input-group-addon"><!--<span class="glyphicon glyphicon-asterisk"></span></span>-->
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputName">Full Name</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="f_name" id="InputName" placeholder="Full Name" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="InputEmail">Enter Email</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmailFirst" name="e_mail" placeholder="Enter Email" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputPassword">Enter Password</label>
                    <div class="input-group">
                        <input type="password" class="form-control" id="InputEmailFirst" name="pwd" placeholder="Enter Password" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div> 
				<div class="form-group">
                    <label for="InputGender">Gender</label>
                    <div class="input-group">
                        <input type="radio" name="gender" value="1" checked="checked">male <input type="radio" name="gender" value="2">female
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>  
				<div class="form-group">
				
				
	 
                    <label for="Inputdob">Date Of Birth</label>
                    <div class="input-group">
					
                        <input type="date" class="form-control" id="InputEmailFirst" name="dob" placeholder="Date Of Birth" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>  
				<div class="form-group">
                    <label for="InputImage">Image</label>
                    <div class="input-group">
                        <input type="file" class="form-control" id="InputEmailFirst" name="ima" placeholder="Profile">
                        <span class="input-group-addon"></span>
                    </div>
                </div>               
                <div class="form-group">
                    <label for="InputAddress">Enter Address</label>
                    <div class="input-group">
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" name="add" placeholder="Enter Address" required></textarea>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="form-group">
                    <label for="InputState">State</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="sta" placeholder="Enter State" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div> 
				<div class="form-group">
                    <label for="InputCountry">Country</label>
                    <div class="input-group">
                        <input type="text" class="form-control" id="InputEmailFirst" name="cou" placeholder="Enter Country" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div> 
				<input type="submit" value="Submit" class="btn btn-info pull-left"><input type="reset" value="Reset" class="btn btn-info pull-right">
            </div>
        </form>
        
    </div>
</div>



<?php require("footer.php"); ?>