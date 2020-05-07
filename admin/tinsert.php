<?php  session_start();
require("header.php");
require("checkUser.php")
?>
<script type="text/javascript">
function check(f)
{
	if(f.tn.value=="")
	{
		document.getElementById("a").innerHTML="Please,Enter the topic name..";
	//	alert("Please,Enter The Topic Name..");
		f.tn.focus();
		return false;
	}
	else if(f.tt.value=="")
	{
		document.getElementById("b").innerHTML="Please,Enter the topic type..";
		//alert("Please,Enter The Topic Type..");
		f.tt.focus();
		return false;
	}
	else
	return true;
	}
</script>
<div class="container" style="margin-top:100px !important">
    <div class="row">
		<form role="form" action="tinsertH.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
            <div class="col-lg-6">
                <div class="well well-sm"><strong>Insert Topic</strong></div>
                <div class="form-group">
                    <label for="InputName"></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="tn" id="InputName" placeholder="Enter Topic" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="well well-sm"><strong>Topic Type</strong></div>
                <div class="form-group">
                    <label for="InputName"></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="tt" id="InputName" placeholder="Topic Type" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<input type="submit" value="Submit" class="btn btn-info pull-left">
		</form>
</div>
</div>
</div>
<?php require("footer.php")?>