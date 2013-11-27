<?php
$konek = mysql_connect("localhost","root","") or die("Cannot connect to server");
mysql_select_db("guestbook",$konek) or die("Cannot connect to the database");


$is_approved= ($_POST['approved'])?$_POST['approved']:'';

$id = ($_POST['id'])?$_POST['id']:'';

if($is_approved==""){
    echo "<script>alert('Complete all field');history.back();</script>";
   
}else{
    mysql_query("update messages set is_approved='".$is_approved."' where id = '{$id}'");
    echo "<script>alert('Record successfuly updated.');window.location.href='view.php';</script>";
}
?>
