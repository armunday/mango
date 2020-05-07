<?php require("header.php");?>
<?php 
session_start();
session_destroy();
?>
<div class="art-contentLayout" style="height:400px">
<h1>log out</h1>
<p>
	You have logged out.  <a href="../index.php">Click here</a> to login again.
</p>
</div>
<?php require("footer.php");?>