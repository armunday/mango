<?php 
	session_start();
	require("header.php");
	require("checkUser.php");
?>
<script type="text/javascript">
	document.getElementById("ahome").className="active";
</script>
<div class="art-contentLayout" style="height:430px">
</div>
<?php require("footer.php");?>