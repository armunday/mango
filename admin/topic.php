<?php session_start();
 require("utility.php");
?>
<?php require("header.php");
require("checkUser.php");

?>
<head>
<style>
table {
    width:100%;
}
table, th, td {
    border: 0px solid black;
    border-collapse: collapse;
	height:50px;
}
th, td {
    padding: 5px;
    text-align: center;
}

</style>

<script type="text/javascript">
	document.getElementById("amanage").className="active";
</script>

</head>

<body>
<div class="art" style="height:420px">
<h2><a href="tinsert.php">Insert Topic</a></h2> 

<?php
	$sql="SELECT * from topic";
	$rows=ExecuteQuery($sql);
	echo "<table border='1'>";
	echo "<strong><tr><th>Number</th><th>Topic name</th><th>Topic type</th><th>Edit</th><th >Delete</th></tr></strong>";
	while($name_row=mysql_fetch_row($rows))
	{
		echo"<tr>";
		echo "<td>{$name_row[0]}</td><td >{$name_row[1]}</td><td>{$name_row[2]}</td><td ><a  href='tedit.php?id=".$name_row[0]."' ><img src='../res/images/edit.jpg'  class='imagedel' /></a></td><td><a href='tdelete.php?id=".$name_row[0]."'><img src='../res/images/delete.jpg'  class='imagedel'/></a></td>";
	}
	echo "</table>";
	
?>
</div>
</body>
<?php require("footer.php")?>