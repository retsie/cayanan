<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("guestbook",$konek) or die("Cannot connect to the database");

$id = $_GET['id'];

    mysql_query("delete from messages where id ='".$id."'");
    echo "<script>alert('Record successfuly updated.');window.location.href='view.php';</script>";
?> 
