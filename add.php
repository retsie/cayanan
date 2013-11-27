<?php

    mysql_connect("localhost","root","") or die (mysql_error());
    echo "wala";
    mysql_select_db("guestbook") or die (mysql_error());
    echo "ok na ";

	$name= ($_POST['name']);
	$message = ($_POST['message']);
	$email = ($_POST['email']);
	$is_approved = "n";
	mysql_query("insert messages set name='".$name."', message='".$message."', email='".$email."', date_posted = CURRENT_DATE, is_approved = '".$is_approved."'");
	echo "<script>alert('Record successfuly saved.');window.location.href='view.php';</script>";

?>
