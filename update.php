<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("guestbook",$konek) or die("Cannot connect to the database");

$query = mysql_query("select * from messages where id ='".$_GET['id']."'");
$row = mysql_fetch_array($query);
?>
<html>
	<body>
		<div style="border:1px solid;">
			<?print_r($_GET['id']);?>
			<form action="edit.php" method="post">
				<input type='hidden' name="id" value="<?=($_GET['id'])?$_GET['id']:''?>">
				<Input type = "radio" name = "approved" value = "n" <?php
				if($row['is_approved'] == "n"){
				echo "checked";
				}
				?>>NO
				<Input type = "radio" name = "approved" value = "y" <?php
				if($row['is_approved'] == "y"){
				echo "checked";
				}
				?> >YES
		 
				<input type="submit" value="Update">
				<input type="reset" value="Reset">
			</form>   
			<a href="index.php" >[Back to home]</a>
		</div>
	</body>
</html>
