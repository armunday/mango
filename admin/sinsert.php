<?php  session_start();
require("header.php");
require("checkUser.php");

$rows = ExecuteQuery ("SELECT topic_name, topic_id FROM Topic")
?>
<script type="text/javascript">
function check(f)
{
	if(f.sn.value=="")
	{
		document.getElementById("a").innerHTML="Please,Enter the subtopic name...";
	//	alert("Please,Enter The Subtopic Name..");
		f.sn.focus();
		return false;
	}
	if(f.sd.value=="")
	{
		document.getElementById("b").innerHTML="Please,Enter the subtopic description";
//		alert("Please,Enter The Subtopic Description..");
		f.sd.focus();
		return false;
	}
	if(f.ss.value=="")
	{
		document.getElementById("c").innerHTML="Please,Enter the subtopic status";
		//alert("Please,Enter The Subtopic Status..");
		f.ss.focus();
		return false;
	}
	if(f.ti.value=="")
	{
		document.getElementById("d").innerHTML="Please,Enter the topic name";
	//	alert("Please,Enter The Topic Name..");
		f.ti.focus();
		return false;
	}
	
	else
	return true;
	}
</script>
<div class="container" style="margin-top:100px !important">
    <div class="row">
		<form role="form" action="sinsertH.php" method="post" onsubmit="return check(this)" enctype="multipart/form-data" name = "form1">
            <div class="col-lg-6">
                <div class="well well-sm"><strong>Subtopic Name</strong></div>
                <div class="form-group">
                    <label for="InputName"></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="sn" id="InputName" placeholder="Enter Topic" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="well well-sm"><strong>Subtopic Description</strong></div>
                <div class="form-group">
                    <label for="InputName"></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="sd" id="InputName" placeholder="Topic Type" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="well well-sm"><strong>Status</strong></div>
                <div class="form-group">
                    <label for="InputName"></label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="ss" id="InputName" placeholder="Topic Type" required>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<div class="well well-sm"><strong>Topic Id</strong></div>
                <div class="form-group">
                    <label for="InputName"></label>
                    <div class="input-group">
						<select name="ti" style="width:100%;height:108%">
    						<?php
								while($row=mysql_fetch_array($rows))
								echo "<option value='$row[topic_id]'>$row[topic_name]</option>";
							?>
					    </select>
                        <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                    </div>
                </div>
				<input type="submit" value="Submit" class="btn btn-info pull-left">
		</form>
</div>
</div>
</div>
<?php require("footer.php")?>