<?php session_start();
 require("header.php");
require("checkUser.php");?>
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

<div class="art" style="height:420px">
<h2><a href="sinsert.php">Insert Subtopic</a></h2>
	<?php 
		$sql="SELECT subtopic_id, subtopic_name, subtopic_Description, s_status, topic.topic_id, topic_name from subtopic, topic where topic.topic_id = subtopic.topic_id";
		$rows=ExecuteQuery($sql);
		
		echo "<table border='1'>";
		echo "<strong><tr><th>Number</th><th>Subtopic Name</th><th>Subtopic Description</th><th>S Status</th><th>Topic Name</th><th>Edit</th><th>Delete</th></tr> </strong>";
		
		while($name_row=mysql_fetch_array($rows))
		{
			echo "<tr>";
			echo "<td>$name_row[subtopic_id]</td><td>$name_row[subtopic_name]</td><td>$name_row[subtopic_Description]</td><td>$name_row[s_status]</td><td>$name_row[topic_name]</td><td><a href='sedit.php?id=".$name_row[0]."'><img src='../res/images/edit.jpg'  class='imagedel'/></a></td><td><a href='sdelete.php?id=".$name_row[0]."'><img src='../res/images/delete.jpg'  class='imagedel'/></a></td>";
			}
		
		echo "</table>";
?>

</div>
<?php require("footer.php")?>