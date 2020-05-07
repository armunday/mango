<?php require("header.html");?>
<?php 
session_start();

ExecuteNonQuery ("UPDATE User SET isuser=false WHERE user_id='$_SESSION[uid]'");

session_destroy();
?>
<div class="art-contentLayout" style="height:405px">
<h1>Log out</h1>
<p>
	You have logged out.  <a href="index.php">Click hear</a> to login again.
</p>
</div>
<?php require("footer.php");?>